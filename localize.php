<?php
/*******************************************************************************
VLLasku: web-based invoicing application.
Copyright (C) 2010-2011 Ere Maijala

Portions based on:
PkLasku : web-based invoicing software.
Copyright (C) 2004-2008 Samu Reinikainen

This program is free software. See attached LICENSE.

*******************************************************************************/

/*******************************************************************************
VLLasku: web-pohjainen laskutusohjelma.
Copyright (C) 2010-2011 Ere Maijala

Perustuu osittain sovellukseen:
PkLasku : web-pohjainen laskutusohjelmisto.
Copyright (C) 2004-2008 Samu Reinikainen

T�m� ohjelma on vapaa. Lue oheinen LICENSE.

*******************************************************************************/

require_once "settings.php";

switch (isset($_SESSION['sesLANG']) ? $_SESSION['sesLANG'] : 'fi') {

case 'en' :
    
break;

default :

    //LOGIN
    $GLOBALS['locWELCOMEMESSAGE'] = 'Ole hyv� ja sy�t� tunnuksesi ja salasanasi.';
    $GLOBALS['locINVALIDCREDENTIALS'] = 'K�ytt�j�tunnus tai salasana v��r�.';
    $GLOBALS['locLOGINTIMEOUT'] = 'Kirjautumislomakkeen t�ytt�aika ylittynyt. Ole hyv� ja kirjaudu uudelleen.';
    $GLOBALS['locMISSINGFIELDS'] = 'Ole hyv� ja sy�t� kaikki tiedot.';
    $GLOBALS['locLoggingIn'] = 'Kirjaudutaan...';
    $GLOBALS['locWELCOME'] = 'Tervetuloa';
    $GLOBALS['locLICENSENOTIFY'] = '';
    $GLOBALS['locCREDITS'] = '';
    $GLOBALS['locUSERID'] = 'Tunnus';
    $GLOBALS['locPASSWORD'] = 'Salasana';
    $GLOBALS['locLOGIN'] = 'Kirjaudu';
    
    //LOGOUT
    $GLOBALS['locTHANKYOU'] = 'Kiitos';
    $GLOBALS['locSESSIONCLOSED'] = 'Istunto on p��tetty.';
    $GLOBALS['locBACKTOLOGIN'] = 'Takaisin kirjautumaan';
    
    //FORM LABELS
    $GLOBALS['locCOMPNAME'] = 'Yrityksen nimi';
    $GLOBALS['locCOMPVATID'] = 'Y-tunnus';
    $GLOBALS['locCONTACTPERS'] = 'Kontakti';
    $GLOBALS['locCOMPTYPE'] = 'Yritystyyppi';
    $GLOBALS['locEMAIL'] = 'Email';
    $GLOBALS['locCUSTOMERNO'] = 'Asiakasnro';
    $GLOBALS['locCUSTOMERNUMBER'] = 'Asiakasnumero';
    $GLOBALS['locCUSTOMERDEFAULTREFNO'] = 'Asiakaskoht. viitenro';
    $GLOBALS['locVATREGISTERED'] = 'ALV-rekister�ity';
    $GLOBALS['locWWW'] = 'WWW';
    $GLOBALS['locADDRESS'] = 'Osoite';
    $GLOBALS['locSTREETADDR'] = 'Katuosoite';
    $GLOBALS['locHOMECOMMUNE'] = 'Kotikunta';
    $GLOBALS['locZIPCODE'] = 'Postinro';
    $GLOBALS['locCITY'] = 'Postitoimipaikka';
    $GLOBALS['locPOSTALADDR'] = 'Postitoimipaikka';
    $GLOBALS['locPHONE'] = 'Puh.';
    $GLOBALS['locPHONEHOME'] = 'Puh. (koti)';
    $GLOBALS['locPHONEWORK'] = 'Puh. (ty�)';
    $GLOBALS['locGSM'] = 'Puh. (matka)';
    $GLOBALS['locBILLADDR'] = 'Laskutusosoite';
    $GLOBALS['locINFO'] = 'Lis�tiedot';
    $GLOBALS['locNAMELAST'] = 'Sukunimi';
    $GLOBALS['locNAMEFIRST'] = 'Etunimet';
    $GLOBALS['locPERSONID'] = 'Henk.tunnus';
    $GLOBALS['locINVNAME'] = 'Laskun nimi';
    $GLOBALS['locINVNO'] = 'Laskunro';
    $GLOBALS['locPAYER'] = 'Maksaja';
    $GLOBALS['locCLIENTSREFERENCE'] = 'Asiakkaan viite';
    $GLOBALS['locYOURREFERENCE'] = 'Viitteenne';
    $GLOBALS['locINVDATE'] = 'Laskupvm';
    $GLOBALS['locDUEDATE'] = 'Er�pvm';
    $GLOBALS['locREFNO'] = 'Viitenro';
    $GLOBALS['locPAYDATE'] = 'Maksupvm';
    $GLOBALS['locSTATUS'] = 'Tila';
    $GLOBALS['locARCHIVED'] = 'Arkistoitu';
    $GLOBALS['locGETINVNO'] = 'Hae p�iv�m��r�t, laskunro ja viitenro';
    $GLOBALS['locINVROWS'] = 'Laskurivit';
    $GLOBALS['locORDERNO'] = 'J�rj.nro';
    $GLOBALS['locROWTYPE'] = 'Rivityyppi';
    $GLOBALS['locSHOWINVOICES'] = 'N�yt� laskut';
    $GLOBALS['locDESCRIPTION'] = 'Kuvaus';
    $GLOBALS['locDATE'] = 'Pvm';
    $GLOBALS['locPRICE'] = 'Hinta';
    $GLOBALS['locPCS'] = 'Lkm';
    $GLOBALS['locUNIT'] = 'Yksikk�';
    $GLOBALS['locVAT'] = 'Alv';
    $GLOBALS['locSESSIONTYPE'] = 'Istunnon tyyppi';
    $GLOBALS['locTIMEOUT'] = 'Aikaraja';
    $GLOBALS['locLANGS'] = 'Kielet';
    $GLOBALS['locUSERNAME'] = 'K�ytt�j�';
    $GLOBALS['locNAME'] = 'Nimi';
    $GLOBALS['locNAMED'] = 'Nimike';
    $GLOBALS['locLANG'] = 'Kieli';
    $GLOBALS['locLOGONNAME'] = 'Tunnus';
    $GLOBALS['locPASSWD'] = 'Salasana';
    $GLOBALS['locTYPE'] = 'K�ytt�j�tyyppi';
    $GLOBALS['locBANK'] = 'Pankki';
    $GLOBALS['locACCOUNT'] = 'Tilinro';
    $GLOBALS['locACCOUNTIBAN'] = 'IBAN';
    $GLOBALS['locSWIFTBIC'] = 'SWIFT/BIC';
    $GLOBALS['locFIRSTBANK'] = '1. Pankkiyhteys';
    $GLOBALS['locSECONDBANK'] = '2. Pankkiyhteys';
    $GLOBALS['locTHIRDBANK'] = '3. Pankkiyhteys';
    $GLOBALS['locYEAR'] = 'Vuosi';
    $GLOBALS['locOTHERINFO'] = 'Muuta';
    $GLOBALS['locADDINFO'] = 'Lis�tiedot';
    $GLOBALS['locCATEGORY'] = 'Kategoria';
    $GLOBALS['locCONTACTS'] = 'Kontaktit';
    $GLOBALS['locCONTACTPERSON'] = 'Kontaktihenkil�';
    $GLOBALS['locPERSONTITLE'] = 'Titteli';
    $GLOBALS['locFAX'] = 'Fax';
    $GLOBALS['locLABELCONTACTINFO'] = 'Yhteystiedot';
    $GLOBALS['locCOMPANY'] = 'Yritys';
    $GLOBALS['locNOTINUSE'] = 'Poissa k�yt�st�';
    $GLOBALS['locNOTICE'] = 'Huomautukset';
    $GLOBALS['locPAYMENTTYPE'] = 'Maksutapa';
    $GLOBALS['locBILLER'] = 'Laskuttaja';
    $GLOBALS['locROWNO'] = 'Rivinro';
    $GLOBALS['locCOPYINV'] = 'Kopioi lasku ja laskurivit';
    $GLOBALS['locREFUNDINV'] = 'Mit�t�i ja luo hyvityslasku';
    $GLOBALS['locADDREMINDERFEES'] = 'Lis�� huomautus- ja viiv�stysmaksu';
    $GLOBALS['locSHOWREFUNDEDINV'] = 'N�yt� hyvitetty lasku';
    $GLOBALS['locSHOWREFUNDINGINV'] = 'N�yt� hyvitt�v� lasku';
    $GLOBALS['locPRODUCTNAME'] = 'Tuotteen nimi';
    $GLOBALS['locPRODUCTDESCRIPTION'] = 'Tuotekuvaus';
    $GLOBALS['locPRODUCTCODE'] = 'Tuotekoodi';
    $GLOBALS['locPRODUCTGROUP'] = 'Tuoteryhm�';
    $GLOBALS['locINTERNALINFO'] = 'Lis�tiedot (ei n�ytet�)';
    $GLOBALS['locUNITPRICE'] = 'Yksikk�hinta';
    $GLOBALS['locVATPERCENT'] = 'ALV %';
    $GLOBALS['locVATINCLUDED'] = 'Hinta sis�lt�� ALV:n';
    $GLOBALS['locVATINC'] = 'Sis.&nbsp;ALV';
    $GLOBALS['locACCESSLEVEL'] = 'Oikeustaso';

    $GLOBALS['locPrintTemplates'] = 'Tulostusmallit';
    $GLOBALS['locPrintTemplateName'] = 'Tulostusmallin nimi';
    $GLOBALS['locPrintTemplateFileName'] = 'Tiedosto';
    $GLOBALS['locPrintTemplateParameters'] = 'Parametrit';
    $GLOBALS['locPrintTemplateOutputFileName'] = 'Tulostiedosto';
    $GLOBALS['locPrintTemplateType'] = 'Tyyppi';
    $GLOBALS['locPrintTemplateTypeInvoice'] = 'Lasku';
    
    
    //FORM ERRORS & MESSAGES
    $GLOBALS['locERRVALUEMISSING'] = 'Virhe! Arvo puuttuu';
    $GLOBALS['locERRDUPLUNIQUE'] = 'Virhe! Arvo on jo tietokannassa.';
    $GLOBALS['locSAVEFIRST'] = 'Tallenna muut tiedot ensin';
    $GLOBALS['locDBERROR'] = 'Tietokantavirhe';
    $GLOBALS['locDBERRORDESC'] = 'Tietokantavirhe: ';
    $GLOBALS['locDBERRORFOREIGNKEY'] = 'Toiminto ei onnistunut, koska tietueeseen on viittauksia muualta.';
    $GLOBALS['locSYSTEMONLY'] = 'J�rjestelm�n sis�inen - ei muokattavissa';
    $GLOBALS['locINVOICENOTOVERDUE'] = 'Maksuja ei voida lis�t� laskulle, jonka er�p�iv� on t�n��n ta my�hemmin.';
    $GLOBALS['locWRONGSTATEFORREMINDERFEED'] = 'Maksuja ei voida lis�t� maksetulle tai mit�t�idylle laskulle.';
    $GLOBALS['locRECORDDELETED'] = 'Tiedot on poistettu.';
    $GLOBALS['locNOACCESS'] = 'K�ytt�oikeudet eiv�t riit�.';
    $GLOBALS['locErrFileUploadFailed'] = 'Tiedoston lataus ep�onnistui';
    $GLOBALS['locErrFileTypeInvalid'] = 'Tiedoston tyyppi ei kelpaa';
    $GLOBALS['locErrImportFileNotFound'] = 'Tiedostoa ei l�ytynyt - tarkista asetukset';
    
    //FORM BUTTON HELPERS
    $GLOBALS['locSAVE'] = 'Tallenna';
    $GLOBALS['locCOPY'] = 'Kopioi';
    $GLOBALS['locEDIT'] = 'Muokkaa';
    $GLOBALS['locNEW'] = 'Uusi';
    $GLOBALS['locNEWINVOICE'] = 'Uusi lasku';
    $GLOBALS['locNEWCOMPANY'] = 'Uusi asiakas';
    $GLOBALS['locNEWPRODUCT'] = 'Uusi tuote';
    $GLOBALS['locNEWBASE'] = 'Uusi yritys';
    $GLOBALS['locNEWINVOICESTATE'] = 'Uusi laskun tila';
    $GLOBALS['locNEWROWTYPE'] = 'Uusi laskurivityyppi';
    $GLOBALS['locNEWUSER'] = 'Uusi k�ytt�j�';
    $GLOBALS['locNEWSESSIONTYPE'] = 'Uusi istunnon tyyppi';
    $GLOBALS['locNewPrintTemplate'] = 'Uusi tulostusmalli';
    $GLOBALS['locDELETE'] = 'Poista';
    $GLOBALS['locPRINTADDR'] = 'Tulosta osoite';
    $GLOBALS['locPRINTINV'] = 'Tulosta lasku';
    $GLOBALS['locPRINTDISPATCHNOTE'] = 'Tulosta l�hetysluettelo';
    $GLOBALS['locPRINTRECEIPT'] = 'Tulosta kuitti';
    $GLOBALS['locADDROW'] = 'Lis��&nbsp;rivi';
    $GLOBALS['locDELROW'] = 'Poista rivi';
    $GLOBALS['locYES'] = 'Kyll�';
    $GLOBALS['locNO'] = 'Ei';
    $GLOBALS['locHELP'] = 'Ohje';
    $GLOBALS['locCONFIRMDELETE'] = 'Haluatko varmasti poistaa n�m� tiedot?';
    $GLOBALS['locENTRYDELETED'] = 'Tiedot on poistettu';
    $GLOBALS['locDeletedRecord'] = 'Poistettu tietue';
    $GLOBALS['locSAVESEARCH'] = 'Tallenna haku';
    $GLOBALS['locCLOSE'] = 'Sulje';
    $GLOBALS['locRowModification'] = 'Rivin muokkaus';
    $GLOBALS['locRowCopy'] = 'Rivin kopiointi';
   
    
    //MAIN FUNCTIONS
    $GLOBALS['locSHOWSEARCH'] = 'HAKU';
    $GLOBALS['locSHOWREPORTNAVI'] = 'RAPORTIT';
    $GLOBALS['locSHOWSETTINGSNAVI'] = 'ASETUKSET';
    $GLOBALS['locSHOWSYSTEMNAVI'] = 'J�RJESTELM�';
    $GLOBALS['locSHOWINVOICENAVI'] = 'LASKUTUS';
    $GLOBALS['locSHOWARCHIVENAVI'] = 'ARKISTO';
    $GLOBALS['locSHOWCOMPANYNAVI'] = 'ASIAKKAAT';
    $GLOBALS['locSHOWPRODUCTSNAVI'] = 'TUOTTEET';
    $GLOBALS['locSHOWHELP'] = 'OHJE';
    
    //NAVIGATION & LIST
    $GLOBALS['locINVOICESTATES'] = 'Laskun tilat';
    $GLOBALS['locINVOICESTATE'] = 'Laskun tila';
    $GLOBALS['locROWTYPES'] = 'Laskurivityypit';
    $GLOBALS['locROWTYPE'] = 'Laskurivityyppi';
    $GLOBALS['locCOMPANYTYPES'] = 'Yritystyypit';
    $GLOBALS['locCOMPANYTYPE'] = 'Yritystyyppi';
    $GLOBALS['locCOMPANIES'] = 'Asiakkaat';
    $GLOBALS['locCOMPANY'] = 'Asiakas';
    $GLOBALS['locPRODUCTS'] = 'Tuotteet';
    $GLOBALS['locPRODUCT'] = 'Tuote';
    $GLOBALS['locOPENANDUNPAIDINVOICES'] = 'Avoimet ja maksamattomat laskut';
    $GLOBALS['locINVOICES'] = 'Laskut';
    $GLOBALS['locARCHIVEDINVOICES'] = 'Arkistoidut laskut';
    $GLOBALS['locDISPLAYOPENINVOICES'] = 'Avoimet laskut';
    $GLOBALS['locDISPLAYALLINVOICES'] = 'Kaikki laskut';
    $GLOBALS['locDISPLAYARCHIVEDINVOICES'] = 'Arkistoidut laskut';
    $GLOBALS['locINVOICE'] = 'Laskun tiedot';
    $GLOBALS['locSETTINGS'] = 'Asetukset';
    $GLOBALS['locGeneralSettings'] = 'Yleiset asetukset';
    $GLOBALS['locSYSTEM'] = 'J�rjestelm�';
    $GLOBALS['locNOENTRIES'] = 'Ei l�ytyneit�';
    $GLOBALS['locENTERTERMS'] = 'Sy�t� hakusanat v�lily�nnill� eroteltuina. Tyhj� kentt� tai * n�ytt�� kaikki tietueet.';
    $GLOBALS['locSEARCH'] = 'Etsi';
    $GLOBALS['locSESSIONTYPES'] = 'Istunnon tyypit';
    $GLOBALS['locUSER'] = 'K�ytt�j�';
    $GLOBALS['locUSERS'] = 'K�ytt�j�t';
    $GLOBALS['locLOGOUT'] = 'KIRJAUDU ULOS';
    $GLOBALS['locBASE'] = 'Yritys';
    $GLOBALS['locBASES'] = 'Yritykset';
    $GLOBALS['locREPORTS'] = 'Raportit';
    $GLOBALS['locREPORT'] = 'Raportti';
    $GLOBALS['locADDPAYMENT'] = 'Sy�t� maksetut';
    $GLOBALS['locCONFIRM'] = 'Vahvista';
    $GLOBALS['locPRINTINVOICE'] = 'Tulosta laskut';
    $GLOBALS['locEXTSEARCH'] = 'Laaja haku';
    $GLOBALS['locQUICKSEARCH'] = 'Pikahaku';
    $GLOBALS['locINVOICEREPORT'] = 'Laskutusraportti'; 
    $GLOBALS['locPRODUCTREPORT'] = 'Tuoteraportti';
    $GLOBALS['locBACKUPDATABASE'] = 'Tietokannan varmuuskopiointi';
    $GLOBALS['locImportData'] = 'Tietojen tuonti';
    $GLOBALS['locExportData'] = 'Tietojen vienti';
    
    // LIST HEADERS
    $GLOBALS['locHEADERINVOICEDATE'] = 'P�iv�m��r�';       
    $GLOBALS['locHEADERINVOICEDUEDATE'] = 'Er�p�iv�';       
    $GLOBALS['locHEADERINVOICENO'] = 'Nro';       
    $GLOBALS['locHEADERINVOICENAME'] = 'Laskun nimi';       
    $GLOBALS['locHEADERINVOICEREFERENCE'] = 'Viitenro';       
    $GLOBALS['locHEADERINVOICESTATE'] = 'Tila';
    $GLOBALS['locHEADERINVOICEBASE'] = 'Laskuttaja';
    $GLOBALS['locHEADERINVOICECOMPANY'] = 'Maksaja';

    // TABLE TEXTS
    $GLOBALS['locTABLETEXTS'] = 
			'"sLengthMenu": "_MENU_ per sivu",' .
			'"sZeroRecords": "Ei l�ytyneit�",' .
			'"sInfo": "_START_ - _END_ / _TOTAL_",' .
			'"sInfoEmpty": "Ei n�ytett�vi� tietueita",' .
			'"sInfoFiltered": "(suodatettu _MAX_ tietueesta)",' .
			'"sSearch": "Haku",' .
			'"oPaginate": {' .
      '  "sFirst":    "Ensimm�inen",' .
      '  "sPrevious": "Edellinen",' .
      '  "sNext":     "Seuraava",' .
      '  "sLast":     "Viimeinen"' .
      '}';

    //GETINVOICE
    $GLOBALS['locREEMPLOYEE'] = 'Muista tallentaa!';
    $GLOBALS['locMAYCLOSE'] = 'Voit sulkea t�m�n ikkunan!';
    $GLOBALS['locGET'] = 'Hae';
    
    //INVOICE PDF        
    $GLOBALS['locINVOICEHEADER'] = 'LASKU';
    $GLOBALS['locDispatchNoteHeader'] = 'L�HETYSLUETTELO';
    $GLOBALS['locReceiptHeader'] = 'KUITTI';
    $GLOBALS['locPERIODFORCOMPLAINTS'] = 'Huomautusaika';
    $GLOBALS['locPENALTYINTEREST'] = 'Viiv�styskorko';
    $GLOBALS['locTERMSOFPAYMENT'] = 'Maksuehdot';
    $GLOBALS['locSUM'] = 'Hinta �';
    $GLOBALS['locVATPERCENT'] = 'ALV %';
    $GLOBALS['locTAX'] = 'ALV';
    $GLOBALS['locROWTOTAL'] = 'Yhteens�';
    $GLOBALS['locROWNAME'] = 'Nimike';
    $GLOBALS['locROWDESC'] = 'Tarkenne';
    $GLOBALS['locROWPRICE'] = 'Hinta';
    $GLOBALS['locTOTALEXCLUDINGVAT'] = 'Arvonlis�veroton hinta yhteens�';
    $GLOBALS['locTOTALVAT'] = 'Arvonlis�vero yhteens�';
    $GLOBALS['locTOTALINCLUDINGVAT'] = 'Arvonlis�verollinen hinta yhteens�';
    $GLOBALS['locSEESEPARATESTATEMENT'] = 'ks. erillinen laskuerittely';
    $GLOBALS['locINVOICESTATEMENT'] = 'Laskuerittely';
    $GLOBALS['locVATREG'] = 'ALV-rek.';
    $GLOBALS['locInvoiceNumber'] = 'Laskun numero';
    $GLOBALS['locDispatchNoteNumber'] = 'L�hetysluettelon numero';
    $GLOBALS['locReceiptNumber'] = 'Kuitin numero';
    $GLOBALS['locPDFInvoiceDate'] = 'Laskun p�iv�m��r�';
    $GLOBALS['locPDFDispatchNoteDate'] = 'P�iv�m��r�';
    $GLOBALS['locPDFReceiptDate'] = 'P�iv�m��r�';
    $GLOBALS['locPDFDUEDATE'] = 'Er�p�iv�';
    $GLOBALS['locPDFINVREFNO'] = 'Viitenumero';
    $GLOBALS['locREFUNDSINVOICE'] = 'T�m� lasku hyvitt�� laskun %d';
    $GLOBALS['locDUEDATENOW'] = 'HETI';
    $GLOBALS['locFIRSTREMINDERHEADER'] = 'MAKSUKEHOTUS';
    $GLOBALS['locSECONDREMINDERHEADER'] = 'MAKSUKEHOTUS';
    $GLOBALS['locFIRSTREMINDERNOTE'] = "Kirjanpitomme mukaan laskunne on viel� maksamatta. Pyyd�mme teit� maksamaan laskun pikaisesti samaa viitenumeroa k�ytt�en. Jos lasku on jo maksettu, on t�m� kehotus aiheeton.";
    $GLOBALS['locSECONDREMINDERNOTE'] = "Kirjanpitomme mukaan laskunne on edelleen maksamatta. Olkaa hyv� ja maksakaa lasku v�litt�m�sti samaa viitenumeroa k�ytt�en.";
    $GLOBALS['locREMINDERFEEDESC'] = 'Maksukehotus';
    $GLOBALS['locPENALTYINTERESTDESC'] = 'Viiv�styskorko';
        
    //REPORTS
    $GLOBALS['locPRINTINVOICEREPORT'] = 'Tulosta laskutusraportti';
    $GLOBALS['locPRINTPRODUCTREPORT'] = 'Tulosta tuoteraportti';
    $GLOBALS['locPRINTREPORTSTATES'] = 'Raportoitavat tilat';
    $GLOBALS['locOPEN'] = 'Avoimet';
    $GLOBALS['locSENT'] = 'Laskutetut';
    $GLOBALS['locPAID'] = 'Maksetut';
    $GLOBALS['locVATLESS'] = 'Alviton';
    $GLOBALS['locVATPART'] = 'Alv osuus';
    $GLOBALS['locWITHVAT'] = 'Alvillinen';
    $GLOBALS['locTOTAL'] = 'Yhteens�';
    $GLOBALS['locALL'] = 'Kaikki       ';
    
    //extended search
    $GLOBALS['locSearchEqual'] = 'on yht� kuin';
    $GLOBALS['locSearchNotEqual'] = 'on eri kuin';
    $GLOBALS['locSearchLessThan'] = 'on pienempi kuin';
    $GLOBALS['locSearchGreaterThan'] = 'on suurempi kuin';
    $GLOBALS['locSearchSaved'] = 'Haku tallennettu';
    $GLOBALS['locLABELEXTSEARCH'] = 'Valitse listasta kent�t, joista haluat tehd� haun.';
    $GLOBALS['locSELECTSEARCHFIELD'] = 'Hakukentt�';
    $GLOBALS['locSEARCHFIELD'] = 'Hakukentt�';
    $GLOBALS['locSEARCHMATCH'] = ' - ';
    $GLOBALS['locSEARCHTERM'] = 'Hakuehto';
    $GLOBALS['locSEARCHNAME'] = 'Haun nimi';
    $GLOBALS['locERRORNOSEARCHNAME'] = 'VIRHE:\n\rAnna nimi tallennettavalle haulle.';
    $GLOBALS['locLABELQUICKSEARCH'] = 'Tallennetut pikahaut: ';
    $GLOBALS['locNOQUICKSEARCHES'] = 'Tallennettuja pikahakuja ei l�ytynyt. Voit tallentaa uusia pikahakuja laajan haun kautta.';
   
    //MONTHS
    $GLOBALS['locMONTH'] = 'Kuukausi';
    $GLOBALS['locJAN'] = 'Tammikuu ';
    $GLOBALS['locFEB'] = 'Helmikuu';
    $GLOBALS['locMAR'] = 'Maaliskuu';
    $GLOBALS['locAPR'] = 'Huhtikuu';
    $GLOBALS['locMAY'] = 'Toukokuu';
    $GLOBALS['locJUN'] = 'Kes�kuu';
    $GLOBALS['locJUL'] = 'Hein�kuu';
    $GLOBALS['locAUG'] = 'Elokuu';
    $GLOBALS['locSEP'] = 'Syyskuu';
    $GLOBALS['locOCT'] = 'Lokakuu';
    $GLOBALS['locNOV'] = 'Marraskuu';
    $GLOBALS['locDEC'] = 'Joulukuu';
            
    //open_invoices.php
    $GLOBALS['locLABELOPENINVOICES'] = 'Avoimet laskut';
    $GLOBALS['locNOOPENINVOICES'] = 'Ei avoimia laskuja';
    $GLOBALS['locLABELUNPAIDINVOICES'] = 'Maksamattomat laskut';
    $GLOBALS['locNOUNPAIDINVOICES'] = 'Ei maksamattomia laskuja';
    
    // General Settings
    $GLOBALS['locSettingAutoCloseForm'] = 'Sulje lomake automaattisesti tallennuksen tai poiston j�lkeen';
    $GLOBALS['locSettingAddCustomerNumber'] = 'Lis�� uudelle asiakkaalle juokseva asiakasnumero automaattisesti';
    $GLOBALS['locSettingShowDeletedRecords'] = 'N�yt� poistetut tietueet (istuntokohtainen asetus)';
    $GLOBALS['locSettingInvoices'] = 'Laskutusasetukset';
    $GLOBALS['locSettingInvoiceAddNumber'] = 'Lis�� uudelle laskulle juokseva laskunumero automaattisesti';
    $GLOBALS['locSettingInvoiceNumberingPerBase'] = 'Numeroi laskut laskuttajakohtaisesti';
    $GLOBALS['locSettingInvoiceAddReferenceNumber'] = 'Lis�� uudelle laskulle viitenumero automaattisesti';
    $GLOBALS['locSettingInvoiceShowBarcode'] = 'N�yt� viivakoodi laskun tilisiirtolomakkeessa';
    $GLOBALS['locSettingInvoiceShowRowDate'] = 'N�yt� laskurivin p�iv�ys laskussa';
    $GLOBALS['locSettingInvoiceSeparateStatement'] = 'Tulosta laskurivit aina erilliseen laskuerittelyyn';
    $GLOBALS['locSettingInvoiceDefaultVATPercent'] = 'Oletus-ALV-prosentti';
    $GLOBALS['locSettingInvoicePaymentDays'] = 'Oletusmaksuaika p�ivin�';
    $GLOBALS['locSettingInvoiceTermsOfPayment'] = 'Maksuehdot (%d = maksuaika p�ivin�)';
    $GLOBALS['locSettingInvoicePeriodForComplaints'] = 'Huomautusaika';
    $GLOBALS['locSettingInvoicePenaltyInterestPercent'] = 'Viiv�styskorkoprosentti';
    $GLOBALS['locSettingInvoiceNotificationFee'] = 'Huomautusmaksu';
    $GLOBALS['locSettingInvoicePDFFilename'] = 'Laskun tiedostonimi (%s = laskun numero, tulostusmallin m��ritys ohittaa t�m�n asetuksen)';
    $GLOBALS['locSettingInvoiceOpenInNewWindow'] = 'Avaa PDF-lasku uudessa ikkunassa';

    // Base logo
    $GLOBALS['locBaseLogoTitle'] = 'Logo';
    $GLOBALS['locBaseChangeImage'] = 'Vaihda kuva...';
    $GLOBALS['locBaseLogo'] = 'Yrityksen logo (suositeltu leveys-korkeussuhde n. 4:1, png tai jpg, tiedoston maksimikoko %s)';
    $GLOBALS['locBaseLogoSizeDBLimited'] = '(tietokantayhteyden rajoitus)';
    $GLOBALS['locBaseSaveLogo'] = 'Tallenna logo';
    $GLOBALS['locBaseEraseLogo'] = 'Poista logo';
    $GLOBALS['locBaseLogoSaved'] = 'Logo tallennettu';
    $GLOBALS['locBaseLogoErased'] = 'Logo poistettu';
    $GLOBALS['locBaseLogoTop'] = 'Yl�reunasta (mm, oletus 15)';
    $GLOBALS['locBaseLogoLeft'] = 'Vasemmalta (mm, oletus 10)';
    $GLOBALS['locBaseLogoWidth'] = 'Logon leveys (mm, oletus 80)';
    $GLOBALS['locBaseLogoBottomMargin'] = 'Logon alamarginaali (mm, oletus 5)';

    // Import / Export
    $GLOBALS['locImportExportFieldDelimiterComma'] = 'Pilkku';
    $GLOBALS['locImportExportFieldDelimiterSemicolon'] = 'Puolipiste';
    $GLOBALS['locImportExportFieldDelimiterTab'] = 'Sarkain'; 
    $GLOBALS['locImportExportFieldDelimiterPipe'] = 'Putki'; 
    $GLOBALS['locImportExportFieldDelimiterColon'] = 'Kaksoispiste';
    $GLOBALS['locImportExportEnclosureDoubleQuote'] = 'Lainausmerkki';
    $GLOBALS['locImportExportEnclosureSingleQuote'] = 'Heittomerkki';
    $GLOBALS['locImportExportEnclosureNone'] = 'Ei mit��n';
    $GLOBALS['locImportExportCharacterSet'] = 'Merkist�';    
    $GLOBALS['locImportExportTable'] = 'Taulu';    
    $GLOBALS['locImportExportTableBases'] = 'Laskuttajat';    
    $GLOBALS['locImportExportTableCompanies'] = 'Asiakkaat';    
    $GLOBALS['locImportExportTableCompanyContacts'] = 'Asiakkaiden yhteyshenkil�t';    
    $GLOBALS['locImportExportTableInvoices'] = 'Laskut';    
    $GLOBALS['locImportExportTableInvoiceRows'] = 'Laskurivit';    
    $GLOBALS['locImportExportTableProducts'] = 'Tuotteet';    
    $GLOBALS['locImportExportTableRowTypes'] = 'Laskurivityypit';    
    $GLOBALS['locImportExportTableInvoiceStates'] = 'Laskun tilat';    
    $GLOBALS['locImportExportFormat'] = 'Formaatti';    
    $GLOBALS['locImportExportFieldDelimiter'] = 'Kent�n erotin';    
    $GLOBALS['locImportExportEnclosureCharacter'] = 'Tekstimerkki';    
    $GLOBALS['locImportExportRowDelimiter'] = 'Rivinvaihto';    
    $GLOBALS['locImportExportColumnNone'] = '(ei mit��n)';
    
    // Import
    $GLOBALS['locImportFileSelection'] = 'Tuotavan tiedoston valinta';
    $GLOBALS['locImportFileParameters'] = 'Tuotavan tiedoston asetukset';
    $GLOBALS['locImportUploadFile'] = 'Lataa tiedosto palvelimelle (tiedoston maksimikoko %s)';
    $GLOBALS['locImportUseServerFile'] = 'K�yt� palvelimella olevaa tiedostoa (m��ritelty asetustiedostossa)';
    $GLOBALS['locImportColumnMapping'] = 'Sarakkeiden kohdistus (ensimm�iset 10 rivi�)';
    $GLOBALS['locImportIdentificationColumns'] = 'Olemassaolevien rivien tunnistukseen k�ytett�v�t sarakkeet';
    $GLOBALS['locImportExistingRowHandling'] = 'Olemassaolevien rivien k�sittely';
    $GLOBALS['locImportExistingRowIgnore'] = 'Ohita';
    $GLOBALS['locImportExistingRowUpdate'] = 'P�ivit�';
    $GLOBALS['locImportColumnUnused'] = '(ei k�yt�ss�)';
    $GLOBALS['locImportMode'] = 'Suoritettava toiminto';
    $GLOBALS['locImportModeReport'] = 'Vain raportti (ei tee varsinaista tuontia)';
    $GLOBALS['locImportModeImport'] = 'Tietojen tuonti';
    $GLOBALS['locImportResults'] = 'Tuonnin tulokset';
    $GLOBALS['locImportNext'] = 'Seuraava';
    $GLOBALS['locImportStart'] = 'K�ynnist�';
    $GLOBALS['locImportDone'] = 'Tuonti valmis';

    // Export
    $GLOBALS['locExport'] = 'Vienti';
    $GLOBALS['locTable_base'] = 'Laskuttajat';    
    $GLOBALS['locTable_company'] = 'Asiakkaat';    
    $GLOBALS['locTable_company_contact'] = 'Yhteyshenkil�t';    
    $GLOBALS['locTable_invoice'] = 'Laskut';    
    $GLOBALS['locTable_invoice_row'] = 'Laskurivit';    
    $GLOBALS['locTable_product'] = 'Tuotteet';    
    $GLOBALS['locTable_row_type'] = 'Laskurivityypit';    
    $GLOBALS['locTable_invoice_state'] = 'Laskun tilat';    
    $GLOBALS['locExportIncludeChildRows'] = 'Sis�llyt� lapsirivit';
    $GLOBALS['locExportIncludeDeletedRecords'] = 'Sis�llyt� poistetut tietueet';
    $GLOBALS['locExportColumns'] = 'Sarakkeet';    
    $GLOBALS['locExportAddAllColumns'] = 'Lis�� kaikki';
    $GLOBALS['locExportDo'] = 'Vie';
break;

}

foreach ($GLOBALS as $key => &$tr)
{
  if (substr($key, 0, 3) == 'loc' && is_string($tr))
  {
    $GLOBALS["a$key"] = $tr;
    if (_CHARSET_ == 'UTF-8')
      $tr = utf8_encode($tr);
  }
}

?>
