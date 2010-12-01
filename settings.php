<?php
/*******************************************************************************
VLLasku: web-based invoicing application.
Copyright (C) 2010 Ere Maijala

Portions based on:
PkLasku : web-based invoicing software.
Copyright (C) 2004-2008 Samu Reinikainen

This program is free software. See attached LICENSE.

*******************************************************************************/

/*******************************************************************************
VLLasku: web-pohjainen laskutusohjelma.
Copyright (C) 2010 Ere Maijala

Perustuu osittain sovellukseen:
PkLasku : web-pohjainen laskutusohjelmisto.
Copyright (C) 2004-2008 Samu Reinikainen

T�m� ohjelma on vapaa. Lue oheinen LICENSE.

*******************************************************************************/

/********************************************************************
Includefile : settings.php
    Basic settings. 
    
********************************************************************/

// Tietokantapalvelimen osoite
define('_DB_SERVER_', 'localhost');

// Tunnus tietokantapalvelimelle
define('_DB_USERNAME_', 'vllasku');

// Salasana tietokantapalvelimelle
define('_DB_PASSWORD_', 'vllasku');

// Tietokannan nimi
define('_DB_NAME_', 'vllasku');

// Tietokantataulujen prefix
define ("_DB_PREFIX_", "vllasku");

// Sivujen otsikko
define ("_PAGE_TITLE_", "VLLasku");

// http vai https - vaihda vain jos automaattinen valinta alla ei toimi
define ('_PROTOCOL_', isset($_SERVER['HTTPS']) ? 'https://' : 'http://');
//define ("_PROTOCOL_", "http://");

// Sekalaisia muuttujia:

// N�ytet��nk� viivakoodi
define ('_SHOW_BARCODE_', TRUE); // TRUE = n�ytet��n tai FALSE = ei n�ytet�

// N�ytet��nk� laskurivill� p�iv�m��r� (pdf)
define ('_SHOW_INVOICE_ROW_DATE_', TRUE); // TRUE = n�ytet��n tai FALSE = ei n�ytet�

// listojen rivim��r�
define ('_NAVI_LIST_ROWS_', 0); 

// PDF-laskupohjan rivim��r� - kun ylittyy niin laskurivit tulostuvat erilliseen laskuerittelyyn.
// Normaalisti ei tarvitse muuttaa - erittely tehd��n, jos rivit eiv�t mahdu niille varattuun tilaan.
define ('_INVOICE_PDF_ROWS_', 99); 

// Maksupvm lasketaan n�in monta p�iv�� tulevaisuuteen
define ('_PAYMENT_DAYS_', 14); 

// Asetetaanko laskun numero automaattisesti uutta laskua teht�ess�
define ('_ADD_INVOICE_NUMBER_', TRUE); // TRUE = kyll� tai FALSE = ei

// Luodaanko viitenumero automaattisesti laskun numerosta uutta laskua teht�ess�
define ('_ADD_REFERENCE_NUMBER_', TRUE); // TRUE = kyll� tai FALSE = ei

// Oletus-alv
define ('_DEFAULT_VAT_', 23);

// Maksuehdot
define ('_TERMS_OF_PAYMENT_', '14 pv netto'); 

// Huomautusaika
define ('_PERIOD_FOR_COMPLAINTS_', '7 p�iv��'); 

// Viiv�styskorko
define ('_PENALTY_INTEREST_', '8 %');
// Viiv�styskorko numerona
define ('_PENALTY_INTEREST_PERCENT_', 8);

// Huomautusmaksu
define ('_NOTIFICATION_FEE_', 5); 
