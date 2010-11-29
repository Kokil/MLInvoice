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
$showBarcode = TRUE; // TRUE = n�ytet��n tai FALSE = ei n�ytet�

// N�ytet��nk� laskurivill� p�iv�m��r� (pdf)
$showInvoiceRowDate = TRUE; // TRUE = n�ytet��n tai FALSE = ei n�ytet�

// Vasemman valikon rivim��r�
$leftNaviListRows = 40;

// PDF-laskupohjan rivim��r� - kun ylittyy niin laskurivit tulostuvat erilliseen laskuerittelyyn.
// Normaalisti ei tarvitse muuttaa - erittely tehd��n, jos rivit eiv�t mahdu niille varattuun tilaan.
$invoicePdfRows = 99;

// Maksupvm lasketaan n�in monta p�iv�� tulevaisuuteen
$paymentDueDate = 14;

// Asetetaanko laskun numero automaattisesti uutta laskua teht�ess�
$addInvoiceNumber = TRUE; // TRUE = kyll� tai FALSE = ei

// Luodaanko viitenumero automaattisesti laskun numerosta uutta laskua teht�ess�
$addReferenceNumber = TRUE; // TRUE = kyll� tai FALSE = ei

// Oletus-alv
$defaultVAT = 23;

// Maksuehdot
$termsOfPayment = '14 pv netto';

// Huomautusaika
$periodForComplaints = '7 p�iv��';

// Viiv�styskorko
$penaltyInterest = '8 %';
// Viiv�styskorko numerona
$penaltyInterestPercent = 8;

// Huomautusmaksu
$notificationFee = 5;
