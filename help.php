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

require "htmlfuncs.php";
require "sqlfuncs.php";
require "sessionfuncs.php";

$strSesID = sesVerifySession();
$strTopic = $_REQUEST['topic'] ? $_REQUEST['topic'] : FALSE;



switch ( $strTopic ) {
    case 'main':
        $strHeadTitle = "Ohjeet";
        $strTopicText =
            "Ohjelma koostuu yl�valikosta, jossa on ohjelman p��osien painikkeet, toimintovalikosta, jossa n�ytet��n valitun osion toiminnot ja toimintoikkunoista, joissa suoritetaan valitun toiminnon k�sittely.<br>(Esim. 'HAKU'-painikkeesta avataan hakun�kym� toimintovalikkoon, josta 'ETSI'-painikkeella avataan tulokset toimintoikkunaan.)<br><br>Kysymysmerkkipainikkeella avautuu tarkemmat ohjeet kyseiseen n�kym��n tai toimintoon.";
    break;
    case 'search':
        $strHeadTitle = "Haku";
        $strTopicText =
            "Valitse tietue, josta haluat haun suorittaa.(esim 'Asiakkaat')<br><br>Sy�t� tyhj��n kentt��n hakusana(t), joilla tietoa haetaan.(esim sukunimi tms.)<br>Voit j�tt�� kent�n tyhj�ksi tai k�ytt�� '*'-merkki�, jolloin kaikki valitun tietueen tiedot haetaan.<br><br>Haku suoritetaan 'ETSI'-painikkeesta.<br><br>'TARKKA HAKU'-painikkeella avautuu ikkuna, jolla voi tehd� tarkkoja hakuja laajoilla hakuehdoilla.(valitse ensin tietue, josta haluat haun tehd�)<br><br>'PIKAHAKU'-painikkeella avataan ikkuna, jossa on tallenetut pikahaut.(pikahaut tallenetaan tarkan haun kautta)";
    break;
    case 'navi':
        $strHeadTitle = "Toimintovalikko";
        $strTopicText =
            "Valitse toiminto painamalla sen nime�.";
    break;
    case 'list':
        $strHeadTitle = "Hakutulokset";
        $strTopicText =
            "Listan toiminnot ovat seuraavat (ylh��lt� lukien) :<br><br>1. Otsikko n�ytt�� tietueen, johon haku tehtiin<br><br>2. Numerot kertovat l�ytyneiden tietojen m��r�n.<br>Kun tietoja on paljon, n�ytet��n ne osittain.<br> Nuolilla siirryt��n tulosjoukosta toiseen.<br><br>3. L�ytyneet tiedot listataan allekkain ja nime� klikkaamalla avataan tietojen k�sittelyyn tarkoitettu lomake.<br><br>4. 'UUSI'-painikkeella voit luoda uuden tietueen. (Esim. uuden asiakkaan tiedot)";
    break;
    case 'form':
        $strHeadTitle = "Lomake";
        $strTopicText =
            "Lomake koostuu seuraavista osista (ylh��lt� lukien) :<br><br>1. Lomakkeella on vaihteleva m��r� sy�tt�kentti� otsikoineen, joihin tiedot lis�t��n tai joiden tietoja muokataan.<br><br>2. 'TEE'-painikkeella suoritetaan monimutkaisempia toimintoja.<br> <br><br>3. Tiedot tallennetaan 'TALLETA'-painikkeella.<br>Muista aina tallentaa tekem�si muutokset ennenkuin vaihdat ohjelman osiota. Tiedot tallentuvat vain painiketta painamalla.<br><br>4. 'UUSI'-painikkeella voit luoda uuden tietueen. (Esim. uuden asiakkaan tiedot)<br><br>5. 'POISTA'-painikkeella h�vitet��n lomakkeen tiedot. Tiedot poistuvat lopullisesti.<br>K�YT� HARKITEN!";
    break;
    case 'extsearch':
        $strHeadTitle = "Tarkka haku";
        $strTopicText =
            "Valitse listasta kent�t, joista haluat haun suorittaa.(esim 'Sukunimi')<br><br>Valitse listasta tapa, jolla haku suoritetaan. Esim. 'on yht� kuin' hakee hakusanaasi vastaavat tiedot ja 'on eri kuin'-valinta hakee tiedot joista ei l�ydy hakusanaa<br><br>Sy�t� tyhj��n kentt��n hakusana(t) tai valitse ehto listasta, joilla tietoa haetaan.(esim sukunimi tms.)<br><br>Haku suoritetaan 'ETSI'-painikkeesta.<br><br>Voit tallentaa hakuehdot my�hemmin nopeasti k�ytett�v�ksi pikahauksi 'TALLENNA HAKU'-painikkeella.(muista antaa pikahaulle kuvavaa nimi)";
    break;
    case 'quicksearch':
        $strHeadTitle = "Pikahaku";
        $strTopicText =
            "Suorita pikahaku klikkaamalla haluamasi haun nime�<br><br>Voit poistaa turhat pikahaut painamalla nimen vieress� olevaa 'X'-painiketta<br><br>Pikahakuja voit tallentaa tarkan haun kautta.";
    break;
    default :
        $strHeadTitle = "Aiheeseen liittyvi� ohjeita ei l�ytynyt!";
    break;
}


echo htmlPageStart( _PAGE_TITLE_ );

echo "<center><h1>".$strHeadTitle."</h1></center>";

echo "<p>".$strTopicText."</p>";

?>
<center>
<a class="actionlink" href="#" onclick="self.close(); return false;">SULJE</a>
</center>
</body>
</html>
