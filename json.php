<?php
/*******************************************************************************
VLLasku: web-based invoicing application.
Copyright (C) 2010 Ere Maijala

This program is free software. See attached LICENSE.

*******************************************************************************/

/*******************************************************************************
VLLasku: web-pohjainen laskutusohjelma.
Copyright (C) 2010 Ere Maijala

Tämä ohjelma on vapaa. Lue oheinen LICENSE.

*******************************************************************************/

require_once "sqlfuncs.php";
require_once "miscfuncs.php";
require_once "sessionfuncs.php";

sesVerifySession(FALSE);

$strFunc = getRequest('func', '');

switch ($strFunc)
{
case 'get_company':
  $companyId = getRequest('id', '');
  if ($companyId) 
  {
    $res = mysql_param_query('SELECT * FROM {prefix}company WHERE ID=?', array($companyId));
    $row = mysql_fetch_assoc($res);
    header('Content-Type: application/json');
    echo json_encode($row);
  }
break;
case 'get_invoice_defaults':
  $res = mysql_query_check('SELECT max(invoice_no) FROM {prefix}invoice');
  $invNo = mysql_result($res, 0, 0) + 1;
  $refNo = $invNo . miscCalcCheckNo($invNo);
  $strDate = date("d.m.Y");
  $strDueDate = date("d.m.Y", mktime(0, 0, 0, date("m"), date("d")+_PAYMENT_DAYS_, date("Y")));
  $arrData = array(
    'invoice_no' => $invNo, 
    'ref_no' => $refNo,
    'date' => $strDate,
    'due_date' => $strDueDate
  );
  header('Content-Type: application/json');
  echo json_encode($arrData);
break;
default:
  header('HTTP/1.1 404 Not Found');
}
