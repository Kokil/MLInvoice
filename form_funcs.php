<?php
/*******************************************************************************
 MLInvoice: web-based invoicing application.
 Copyright (C) 2010-2016 Ere Maijala

 This program is free software. See attached LICENSE.

 *******************************************************************************/

/*******************************************************************************
 MLInvoice: web-pohjainen laskutusohjelma.
 Copyright (C) 2010-2016 Ere Maijala

 Tämä ohjelma on vapaa. Lue oheinen LICENSE.

 *******************************************************************************/
require_once 'sqlfuncs.php';
require_once 'datefuncs.php';
require_once 'miscfuncs.php';

// Get post values or defaults for unspecified values
function getPostValues(&$formElements, $primaryKey, $parentKey = FALSE)
{
    $values = [];

    foreach ($formElements as $elem) {
        if (in_array($elem['type'],
            [
                '',
                'IFORM',
                'RESULT',
                'BUTTON',
                'JSBUTTON',
                'DROPDOWNMENU',
                'IMAGE',
                'ROWSUM',
                'NEWLINE',
                'LABEL'
            ])) {
            $values[$elem['name']] = isset($primaryKey) ? $primaryKey : FALSE;
        } else {
            $values[$elem['name']] = getPostRequest($elem['name'], FALSE);
            if (isset($elem['default']) && ($values[$elem['name']] === FALSE ||
                 ($elem['type'] == 'INT' && $values[$elem['name']] === ''))) {
                $values[$elem['name']] = getFormDefaultValue($elem, $parentKey);
            } elseif ($elem['type'] == 'INT') {
                $values[$elem['name']] = str_replace(',', '.',
                    $values[$elem['name']]);
            } elseif ($elem['type'] == 'LIST' && $values[$elem['name']] === FALSE) {
                $values[$elem['name']] = '';
            }
        }
    }
    return $values;
}

// Get the default value for the given form element
function getFormDefaultValue($elem, $parentKey)
{
    if (!isset($elem['default'])) {
        return false;
    }
    if ($elem['default'] === 'DATE_NOW') {
        return date($GLOBALS['locDateFormat']);
    } elseif (strstr($elem['default'], 'DATE_NOW+')) {
        $atmpValues = explode('+', $elem['default']);
        return date($GLOBALS['locDateFormat'],
            mktime(0, 0, 0, date('m'), date('d') + $atmpValues[1], date('Y')));
    } elseif (strstr($elem['default'], 'ADD')) {
        $strQuery = str_replace('_PARENTID_', $parentKey, $elem['listquery']);
        $intAdd = mysqli_fetch_value(mysqli_query_check($strQuery));
        return isset($intAdd) ? $intAdd : 0;
    } elseif ($elem['default'] === 'POST') {
        // POST has special treatment in iform
        return '';
    }
    return $elem['default'];
}

// Save form data. If primaryKey is not set, add a new record and set it, otherwise update existing record.
// Return true on success.
// Return false on conflict or a string of missing values if encountered. In these cases, the record is not saved.
function saveFormData($table, &$primaryKey, &$formElements, &$values, &$warnings,
    $parentKeyName = '', $parentKey = false, $onPrint = false)
{
    global $dblink;

    $missingValues = '';
    $strFields = '';
    $strInsert = '';
    $strUpdateFields = '';
    $arrValues = [];

    if (!isset($primaryKey) || !$primaryKey)
        unset($values['id']);

    foreach ($formElements as $elem) {
        $type = $elem['type'];

        if (in_array($type,
            [
                '',
                'IFORM',
                'RESULT',
                'BUTTON',
                'JSBUTTON',
                'DROPDOWNMENU',
                'IMAGE',
                'ROWSUM',
                'NEWLINE',
                'LABEL'
            ]) || (isset($elem['read_only']) && $elem['read_only'])) {
            continue;
        }

        $name = $elem['name'];

        if (!$elem['allow_null'] && (!isset($values[$name]) || $values[$name] === '')) {
            if ($missingValues)
                $missingValues .= ', ';
            $missingValues .= $elem['label'];
            continue;
        }

        if (isset($values[$name])) {
            $value = $values[$name];
        } else {
            if (isset($primaryKey) && $primaryKey != 0) {
                continue;
            }
            $value = getFormDefaultValue($elem, $parentKey);
        }

        if ($type == 'PASSWD' && !$value)
            continue; // Don't save empty password

        if (isset($elem['unique']) && $elem['unique']) {
            $query = "SELECT * FROM $table WHERE deleted=0 AND $name=?";
            $params = [
                $value
            ];
            if (isset($primaryKey) && $primaryKey) {
                $query .= ' AND id!=?';
                $params[] = $primaryKey;
            }
            $res = mysqli_param_query($query, $params);
            if (mysqli_fetch_array($res)) {
                $warnings = sprintf($GLOBALS['locDuplicateValue'], $elem['label']);
                return false;
            }
        }

        if ($strFields) {
            $strFields .= ', ';
            $strInsert .= ', ';
            $strUpdateFields .= ', ';
        }
        $strFields .= $name;
        $fieldPlaceholder = '?';
        switch ($type) {
        case 'PASSWD' :
            $fieldPlaceholder = 'md5(?)';
            $arrValues[] = $values[$name];
            break;
        case 'INT' :
        case 'HID_INT' :
        case 'SECHID_INT' :
            $arrValues[] = ($value !== '' && $value !== false) ? str_replace(',',
                '.', $value) : ($elem['allow_null'] ? NULL : 0);
            break;
        case 'LIST' :
        case 'SEARCHLIST' :
            $arrValues[] = isset($values[$name]) ? ($value !== '' ? str_replace(',',
                '.', $value) : NULL) : NULL;
            break;
        case 'CHECK' :
            $arrValues[] = $value ? 1 : 0;
            break;
        case 'INTDATE' :
            $arrValues[] = $value ? dateConvDate2DBDate($value) : NULL;
            break;
        default :
            $arrValues[] = $value;
        }
        $strInsert .= $fieldPlaceholder;
        $strUpdateFields .= "$name=$fieldPlaceholder";
    }

    if ($missingValues)
        return $missingValues;

    mysqli_query_check('SET AUTOCOMMIT = 0');
    mysqli_query_check('BEGIN');
    try {
        // Special case for invoice rows - update product stock balance
        if ($table == '{prefix}invoice_row') {
            updateProductStockBalance(isset($primaryKey) ? $primaryKey : null,
                isset($values['product_id']) ? $values['product_id'] : null,
                $values['pcs']);
        }

        if (!isset($primaryKey) || !$primaryKey) {
            if ($parentKeyName) {
                $strFields .= ", $parentKeyName";
                $strInsert .= ', ?';
                $arrValues[] = $parentKey;
            }
            $strQuery = "INSERT INTO $table ($strFields) VALUES ($strInsert)";
            mysqli_param_query($strQuery, $arrValues, 'exception');
            $primaryKey = mysqli_insert_id($dblink);
        } else {
            // Special case for invoice - update product stock balance for all
            // invoice rows if the invoice was previously deleted
            if ($table == '{prefix}invoice') {
                $res = mysqli_param_query(
                    'SELECT deleted FROM {prefix}invoice WHERE id=?',
                    [
                        $primaryKey
                    ]);
                if (mysqli_fetch_value($res)) {
                    $res = mysqli_param_query(
                        'SELECT product_id, pcs FROM {prefix}invoice_row WHERE invoice_id=? AND deleted=0',
                        [
                            $primaryKey
                        ]);
                    while ($row = mysqli_fetch_assoc($res)) {
                        updateProductStockBalance(null, $row['product_id'],
                            $row['pcs']);
                    }
                }
            }

            $strQuery = "UPDATE $table SET $strUpdateFields, deleted=0 WHERE id=?";
            $arrValues[] = $primaryKey;
            mysqli_param_query($strQuery, $arrValues, 'exception');
        }
    } catch (Exception $e) {
        mysqli_query_check('ROLLBACK');
        mysqli_query_check('SET AUTOCOMMIT = 1');
        die($e->getMessage());
    }
    mysqli_query_check('COMMIT');
    mysqli_query_check('SET AUTOCOMMIT = 1');

    // Special case for invoices - check for duplicate invoice numbers
    if ($table == '{prefix}invoice' && isset($values['invoice_no']) &&
         $values['invoice_no']) {
        $query = 'SELECT ID FROM {prefix}invoice where deleted=0 AND id!=? AND invoice_no=?';
        $params = [
            $primaryKey,
            $values['invoice_no']
        ];
        if (getSetting('invoice_numbering_per_base')) {
            $query .= ' AND base_id=?';
            $params[] = $values['base_id'];
        }
        if (getSetting('invoice_numbering_per_year')) {
            $query .= ' AND invoice_date >= ' . date('Y') . '0101';
        }

        $res = mysqli_param_query($query, $params);
        if (mysqli_fetch_assoc($res))
            $warnings = $GLOBALS['locInvoiceNumberAlreadyInUse'];
    }

    // Special case for invoices - check, according to settings, that the invoice has
    // an invoice number and a reference number
    if ($table == '{prefix}invoice' && $onPrint &&
        (getSetting('invoice_add_number')
        || getSetting('invoice_add_reference_number'))
    ) {
        mysqli_query_check(
            'LOCK TABLES {prefix}invoice WRITE, {prefix}settings READ'
            . ', {prefix}company READ'
        );
        $res = mysqli_param_query(
            'SELECT invoice_no, ref_number, base_id, company_id, invoice_date,'
            . "interval_type FROM $table WHERE id=?",
            [$primaryKey]
        );
        $data = mysqli_fetch_assoc($res);
        $needInvNo = getSetting('invoice_add_number');
        $needRefNo = getSetting('invoice_add_reference_number');
        if (($needInvNo && empty($data['invoice_no']))
            || ($needRefNo && empty($data['ref_number']))
        ) {
            $defaults = getInvoiceDefaults(
                $primaryKey, $data['base_id'], $data['company_id'],
                $data['invoice_date'], $data['interval_type'], $data['invoice_no']
            );
            $sql = "UPDATE {prefix}invoice SET";
            $updateStrings = [];
            $params = [];
            if ($needInvNo && empty($data['invoice_no'])) {
                $updateStrings[] = 'invoice_no=?';
                $params[] = $defaults['invoice_no'];
            }
            if ($needRefNo && empty($data['ref_number'])) {
                $updateStrings[] = 'ref_number=?';
                $params[] = $defaults['ref_no'];
            }
            $sql .= ' ' . implode(', ', $updateStrings) . ' WHERE id=?';
            $params[] = $primaryKey;
            mysqli_param_query($sql, $params);
        }
        mysqli_query_check('UNLOCK TABLES');
    }

    return true;
}

// Fetch a record. Values in $values, may modify $formElements.
// Returns TRUE on success, 'deleted' for deleted records and 'notfound' if record is not found.
function fetchRecord($table, $primaryKey, &$formElements, &$values)
{
    $result = TRUE;
    $strQuery = "SELECT * FROM $table WHERE id=?";
    $intRes = mysqli_param_query($strQuery, [
        $primaryKey
    ]);
    $row = mysqli_fetch_assoc($intRes);
    if (!$row)
        return 'notfound';

    if ($row['deleted'])
        $result = 'deleted';

    foreach ($formElements as $elem) {
        $type = $elem['type'];
        $name = $elem['name'];

        if (!$type || $type == 'LABEL' || $type == 'FILLER'
            || $type == 'DROPDOWNMENU'
        ) {
            continue;
        }

        switch ($type) {
        case 'IFORM' :
        case 'RESULT' :
            $values[$name] = $primaryKey;
            break;
        case 'BUTTON' :
        case 'JSBUTTON' :
        case 'IMAGE' :
            if (strstr($elem['listquery'], '=_ID_')) {
                $values[$name] = $primaryKey;
            } else {
                $tmpListQuery = $elem['listquery'];
                $strReplName = substr($tmpListQuery, strpos($tmpListQuery, '_'));
                $strReplName = strtolower(
                    substr($strReplName, 1, strrpos($strReplName, '_') - 1));
                $values[$name] = isset($values[$strReplName]) ? $values[$strReplName] : '';
                $elem['listquery'] = str_replace(strtoupper($strReplName), 'ID',
                    $elem['listquery']);
            }
            break;
        case 'INTDATE' :
            $values[$name] = dateConvDBDate2Date($row[$name]);
            break;
        case 'INT' :
            if (isset($elem['decimals'])) {
                $values[$name] = miscRound2Decim($row[$name], $elem['decimals']);
            } else {
                $values[$name] = $row[$name];
            }
            break;
        default :
            $values[$name] = $row[$name];
        }
    }
    return $result;
}

function getFormElements($form)
{
    $strForm = $form;
    require 'form_switch.php';
    return $astrFormElements;
}

function getFormParentKey($form)
{
    $strForm = $form;
    require 'form_switch.php';
    return $strParentKey;
}

function getFormJSONType($form)
{
    $strForm = $form;
    require 'form_switch.php';
    return $strJSONType;
}

function getFormClearRowValuesAfterAdd($form)
{
    $strForm = $form;
    require 'form_switch.php';
    return $clearRowValuesAfterAdd;
}

function getFormOnAfterRowAdded($form)
{
    $strForm = $form;
    require 'form_switch.php';
    return $onAfterRowAdded;
}
