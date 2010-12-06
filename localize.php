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

switch (isset($_POST['sesLANG']) ? $_POST['sesLANG'] : 'fi') {

case 'en' :
    
break;

default :
    
    $GLOBALS['locLICENSENOTIFY'] = 'T�m� ohjelma on vapaa - Katso LICENSE ja gpl.txt asennushakemistosta.<br/>Copyright 2010 Ere Maijala<br/>Portions  Copyright 2004-2008 Samu Reinikainen';
    $GLOBALS['locCREDITS'] = 'Kiitos avusta:<br/> Olivier Plathey - FPDF - http://www.fpdf.org/<br/> GuinuX - Barcode128 + PDF Barcode128 - http://phpclasses.org/browse.html/package/592/';
    
    //FORM LABELS
    $GLOBALS['locCOMPNAME'] = 'Yrityksen nimi';
    $GLOBALS['locCOMPVATID'] = 'Y-tunnus';
    $GLOBALS['locCLIENTNO'] = 'Asiakasnumero';
    $GLOBALS['locCONTACTPERS'] = 'Kontakti';
    $GLOBALS['locCOMPTYPE'] = 'Yritystyyppi';
    $GLOBALS['locEMAIL'] = 'Email';
    $GLOBALS['locVATREGISTERED'] = 'ALV-rekister�ity';
    $GLOBALS['locWWW'] = 'WWW';
    $GLOBALS['locNEARADDR'] = 'L�hiosoite';
    $GLOBALS['locADDRESS'] = 'Osoite';
    $GLOBALS['locSTREETADDR'] = 'Katuosoite';
    $GLOBALS['locHOMECOMMUNE'] = 'Kotikunta';
    $GLOBALS['locZIPCODE'] = 'Postinro';
    $GLOBALS['locCITY'] = 'Postitoimipaikka';
    $GLOBALS['locPOSTALADDR'] = 'Postitoimipaikka';
    $GLOBALS['locPHONE'] = 'Puh.';
    $GLOBALS['locPHONEHOME'] = 'Puh. (koti)';
    $GLOBALS['locPHONEWORK'] = 'Puh. (ty�)';
    $GLOBALS['locGSM'] = 'GSM';
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
    $GLOBALS['locGETINVNO'] = 'Hae laskunro ja laskupvm';
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
    $GLOBALS['locLOGIN'] = 'Kirjaudu';
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
    $GLOBALS['locUNITTYPES'] = 'Yksik�t';
    $GLOBALS['locUNITTYPE'] = 'Yksikk�';
    $GLOBALS['locPERIOD'] = 'Ajalla';
    $GLOBALS['locMM'] = 'kk';
    $GLOBALS['locYY'] = 'vuosi';
    $GLOBALS['locLABELGENERALINFO'] = 'Perustiedot';
    $GLOBALS['locLABELOTHERINFO'] = 'Muut tiedot';
    $GLOBALS['locCATEGORY'] = 'Kategoria';
    $GLOBALS['locSTARTDATE'] = 'Alkupvm';
    $GLOBALS['locENDDATE'] = 'Loppupvm';
    $GLOBALS['locTASKNAME'] = 'Teht�v�';
    $GLOBALS['locTODODATE'] = 'Deadline pvm';
    $GLOBALS['locTODOTIME'] = 'Deadline klo';
    $GLOBALS['locTASKINFO'] = 'Teht�v�n lis�tiedot';
    $GLOBALS['locJOB'] = 'Teht�v�';
    $GLOBALS['locCONTACTS'] = 'Kontaktit';
    $GLOBALS['locCONTACTPERSON'] = 'Kontaktihenkil�';
    $GLOBALS['locSOCIALSECNO'] = 'Henkil�tunnus';
    $GLOBALS['locPERSONTITLE'] = 'Titteli';
    $GLOBALS['locFAX'] = 'Fax';
    $GLOBALS['locMORE'] = '* Asetukset ->';
    $GLOBALS['locPREVIOUS'] = '<- Asetukset *';
    $GLOBALS['locBANKNAME'] = 'Pankki';
    $GLOBALS['locBANKACCOUNT'] = 'Tilinro';
    $GLOBALS['locAMOUNT'] = 'Summa(&euro;)';
    $GLOBALS['locWEEKDATE'] = 'Viikonp�iv�';
    $GLOBALS['locLABELCONTACTINFO'] = 'Yhteystiedot';
    $GLOBALS['locCOMPANY'] = 'Yritys';
    $GLOBALS['locNOTINUSE'] = 'Poissa k�yt�st�';
    $GLOBALS['locNOTICE'] = 'Huomautukset';
    $GLOBALS['locPAYMENTTYPE'] = 'Maksutapa';
    $GLOBALS['locREALINVNO'] = 'Laskunro (juokseva)';
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
    
    
    //FORM ERRORS & MESSAGES
    $GLOBALS['locERRVALUEMISSING'] = 'Virhe! Arvo puuttuu';
    $GLOBALS['locERRDUPLUNIQUE'] = 'Virhe! Arvo on jo tietokannassa...';
    $GLOBALS['locERRDELREFERENCE'] = 'Tietuetta ei voi poistaa! Viittaukset poistettava ensin...';
    $GLOBALS['locSAVEFIRST'] = 'Tallenna muut tiedot ensin';
    $GLOBALS['locDBERROR'] = 'Tietokantavirhe';
    $GLOBALS['locDBERRORDESC'] = 'Tietokantavirhe: ';
    $GLOBALS['locDBERRORFOREIGNKEY'] = 'Toiminto ei onnistunut, koska tietueeseen on viittauksia muualta.';
    $GLOBALS['locFEE'] = 'Maksu';
    $GLOBALS['locMAKEINVFORYEAR'] = 'Tee laskut vuodelle';
    $GLOBALS['locMAKEINVTO'] = 'Laskutettavat j�sentyypit';
    $GLOBALS['locGENERAL'] = 'Yleist�';
    $GLOBALS['locSYSTEMONLY'] = 'J�rjestelm�n sis�inen - ei muokattavissa';
    $GLOBALS['locWRONGSTATEFORREMINDERFEED'] = 'Maksuja ei voida lis�t� laskun nykyisess� tilassa.';
    $GLOBALS['locRECORDDELETED'] = 'Tiedot on poistettu.';
    
    //FORM BUTTON HELPERS
    $GLOBALS['locSAVE'] = 'Tallenna';
    $GLOBALS['locCOPY'] = 'Kopioi';
    $GLOBALS['locNEW'] = 'Uusi';
    $GLOBALS['locNEWINVOICE'] = 'Uusi lasku';
    $GLOBALS['locNEWCOMPANY'] = 'Uusi asiakas';
    $GLOBALS['locNEWPRODUCT'] = 'Uusi tuote';
    $GLOBALS['locNEWBASE'] = 'Uusi yritys';
    $GLOBALS['locNEWINVOICESTATE'] = 'Uusi laskun tila';
    $GLOBALS['locNEWROWTYPE'] = 'Uusi laskurivityyppi';
    $GLOBALS['locNEWUSER'] = 'Uusi k�ytt�j�';
    $GLOBALS['locNEWSESSIONTYPE'] = 'Uusi istunnon tyyppi';
    $GLOBALS['locDELETE'] = 'Poista';
    $GLOBALS['locPRINTADDR'] = 'Tulosta osoite';
    $GLOBALS['locPRINTINV'] = 'Tulosta lasku';
    $GLOBALS['locADD'] = 'Lis�� rivi';
    $GLOBALS['locDELROW'] = 'Poista rivi';
    $GLOBALS['locYES'] = 'Kyll�';
    $GLOBALS['locNO'] = 'Ei';
    $GLOBALS['locHELP'] = 'Ohje';
    $GLOBALS['locCONFIRMDELETE'] = 'Haluatko varmasti poistaa n�m� tiedot?\n\rTiedot poistetaan lopullisesti!';
    $GLOBALS['locENTRYDELETED'] = 'Tiedot on poistettu!';
    $GLOBALS['locSAVESEARCH'] = 'Tallenna haku';
    $GLOBALS['locCLOSE'] = 'Sulje';
   
    $GLOBALS['locLOGON'] = 'KIRJAUDU';
    $GLOBALS['locCANCEL'] = 'Peruuta';
    $GLOBALS['locSEND'] = 'L�het�';
    $GLOBALS['locMAKEINVOICE'] = 'Tee lasku';
    
    
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
    $GLOBALS['locSYSTEM'] = 'J�rjestelm�';
    $GLOBALS['locSHOWPREVRES'] = 'N�yt� edellinen tulosjoukko';
    $GLOBALS['locSHOWNEXTRES'] = 'N�yt� seuraava tulosjoukko';
    $GLOBALS['locNOENTRIES'] = 'Hakuehdoilla ei l�ytynyt tietoja';
    $GLOBALS['locENTERTERMS'] = 'Sy�t� hakusanat v�lily�nnill� eroteltuina. Tyhj� kentt� tai * n�ytt�� kaikki tietueet.';
    $GLOBALS['locSEARCH'] = 'Etsi';
    $GLOBALS['locSHOWADMINNAVI'] = 'N�yt� hallintavalikko';
    $GLOBALS['locMAINNAVI'] = 'Takaisin p��valikkoon';
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
    
    // LIST HEADERS
    $GLOBALS['locHEADERINVOICEDATE'] = 'Pvm';       
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
    
    //INVOICE-PDF        
    $GLOBALS['locINVOICEHEADER'] = 'LASKU';
    $GLOBALS['locSENDER'] = 'L�hett�j�';
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
    $GLOBALS['locTOTALEXCLUDINGVAT'] = 'Veroton kokonaishinta';
    $GLOBALS['locTOTALVAT'] = 'Arvonlis�vero';
    $GLOBALS['locTOTALINCLUDINGVAT'] = 'Verollinen kokonaishinta';
    $GLOBALS['locSEESEPARATESTATEMENT'] = 'ks. erillinen laskuerittely';
    $GLOBALS['locVATREG'] = 'ALV-rek.';
    $GLOBALS['locINVNUMBER'] = 'Laskun numero';
    $GLOBALS['locPDFINVDATE'] = 'Laskun p�iv�m��r�';
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
    
    //??
    $GLOBALS['locPAYMENTS'] = 'Maksut';
    $GLOBALS['locPAYMENT'] = 'Maksu';
    $GLOBALS['locNOVALUES'] = 'Ehdoilla ei l�ytynyt laskuja teht�v�ksi';
    $GLOBALS['locINVOICESDONE'] = "Laskut tehty.";
    $GLOBALS['locMAKEINVOICES'] = 'Tarkista ett� tiedot ovat oikein ja tee laskut "VAHVISTA"-painikkeella.';
    $GLOBALS['locPRINTINVFORYEAR'] = 'Tulosta laskut vuodelta';
    $GLOBALS['locPRINTINVTO'] = 'Tulostettavat laskut';
    $GLOBALS['locSETTIME'] = 'Aseta';
    $GLOBALS['locPERCENT'] = 'Prosentti';
    $GLOBALS['locEDIT'] = 'Muokkaa';
    
    
    //REPORTS
    $GLOBALS['locSELECTYEAR'] = 'Virhe! Valitse vuosi...';
    $GLOBALS['locENTERVALUES'] = 'Virhe! Sy�t� kaikki tiedot.';
    $GLOBALS['locPRINTREPORTFORYEAR'] = 'Tulosta raportit vuodelle';
    $GLOBALS['locPRINTREPORTTO'] = 'Valitse tulostettavat raportit';
    $GLOBALS['locOPEN'] = 'Avoimet';
    $GLOBALS['locSENT'] = 'Laskutetut';
    $GLOBALS['locPAID'] = 'Maksetut';
    $GLOBALS['locVATLESS'] = 'Alviton';
    $GLOBALS['locVATPART'] = 'Alv osuus';
    $GLOBALS['locWITHVAT'] = 'Alvillinen';
    $GLOBALS['locTOTAL'] = 'Yhteens�';
    $GLOBALS['locALL'] = 'Kaikki       ';
    $GLOBALS['locENTERPAYMENT'] = 'Ilmoita lasku maksetuksi';
    $GLOBALS['locENTERREFNODATE'] = 'Sy�t� viitenro ja maksupvm';
    $GLOBALS['locCONFIRMPAYMENT'] = 'Tarkista ett� tiedot ovat oikein ja<br>merkitse lasku maksetuksi "VAHVISTA"-painikkeella.';
    $GLOBALS['locPAYMENTDONE'] = 'Lasku on merkitty maksetuksi.<br>Voit ilmoittaa lis�� laskuja maksetuksi.';
    $GLOBALS['locDATED'] = 'P�iv�ys';
    $GLOBALS['locINVOICES'] = 'Laskut';
    $GLOBALS['locREMEMBER'] = 'Muista tallentaa tiedot "Tallenna"-painikkeella!';
    $GLOBALS['locLABELINVOICEHISTORY'] = 'Yrityksen laskuhistoria';
    
    //select_report
    $GLOBALS['locSELECTREPORTYEAR'] = 'Valitse raportin vuosi';
    $GLOBALS['locSELECTREPORT'] = 'Valitse raportti';
    
    //extended search
    $GLOBALS['locLABELEXTSEARCH'] = 'Valitse listasta kent�t, joista haluat haun tehd�.';
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
    $GLOBALS['locMONTHS'] = array($GLOBALS['locJAN'], $GLOBALS['locFEB'],  $GLOBALS['locMAR'], $GLOBALS['locAPR'], $GLOBALS['locMAY'], $GLOBALS['locJUN'], $GLOBALS['locJUL'], $GLOBALS['locAUG'], $GLOBALS['locSEP'], $GLOBALS['locOCT'], $GLOBALS['locNOV'], $GLOBALS['locDEC']);
    $GLOBALS['locMONTHS2'] = array('',$GLOBALS['locJAN'], $GLOBALS['locFEB'],  $GLOBALS['locMAR'], $GLOBALS['locAPR'], $GLOBALS['locMAY'], $GLOBALS['locJUN'], $GLOBALS['locJUL'], $GLOBALS['locAUG'], $GLOBALS['locSEP'], $GLOBALS['locOCT'], $GLOBALS['locNOV'], $GLOBALS['locDEC']);
            
    //WEEKDAYS
    $GLOBALS['locWEEKDAYSSHORT'] = array('Ma','Ti','Ke','To','Pe','La','Su');
    $GLOBALS['locWEEKDAYS'] = array('Maanantai', 'Tiistai', 'Keskiviikko', 'Torstai', 'Perjantai', 'Lauantai', 'Sunnuntai');
    
    
    $GLOBALS['locWEEK'] = 'Viikko';
    $GLOBALS['locTIMESTART'] = 'Alku';
    $GLOBALS['locTIMEEND'] = 'Loppu';
    $GLOBALS['locPAYMENTDATE'] = 'Maksupvm';
    
    //open_invoices.php
    $GLOBALS['locLABELOPENINVOICES'] = 'Avoimet laskut';
    $GLOBALS['locNOOPENINVOICES'] = 'Ei avoimia laskuja';
    $GLOBALS['locLABELUNPAIDINVOICES'] = 'Maksamattomat laskut';
    $GLOBALS['locNOUNPAIDINVOICES'] = 'Ei maksamattomia laskuja';
    
    //organizer
    $GLOBALS['locPREVMONTH'] = 'Edellinen kuukausi';
    $GLOBALS['locNEXTMONTH'] = 'Seuraava kuukausi';
    $GLOBALS['locSHOWTODAY'] = 'Siirry t�h�n p�iv��n';
    $GLOBALS['locNOEVENTS'] = 'Ei tapahtumia';
    $GLOBALS['locSHOWEVENTS'] = 'N�yt� tapahtumat';
    $GLOBALS['locADDEVENT'] = 'Lis�� tapahtuma';
    $GLOBALS['locDELEVENT'] = 'Poista tapahtuma';
    $GLOBALS['locSHOWEVENT'] = 'N�yt� tapahtuman tiedot';
    
    //create_invoice.php
    $GLOBALS['locWEEKS'] = 'Viikot';
    
    //pic uploader
    $GLOBALS['locROTATE'] = 'K��nn�';
    $GLOBALS['locROTATECWISE'] = 'K��nn� my�t�p�iv��n';
    $GLOBALS['locROTATEACWISE'] = 'K��nn� vastap�iv��n';
    $GLOBALS['locRESIZE'] = 'Muuta koko';
    $GLOBALS['locADDTEN'] = '+10%';
    $GLOBALS['locMINTEN'] = '-10%';
    $GLOBALS['locRESIZEWIDTH'] = 'Muuta pituutta';
    $GLOBALS['locRESIZEHEIGHT'] = 'Muuta korkeutta';
    $GLOBALS['locRESIZEWITHGIVENVALUES'] = 'Muuta annettuihin arvoihin';
break;

}

?>
