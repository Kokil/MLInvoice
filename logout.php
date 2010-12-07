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

sesVerifySession();

require "localize.php";

sesEndSession();

echo htmlPageStart( _PAGE_TITLE_ );

?>

<body style="margin: 30px">

<h1><?php echo $GLOBALS['locTHANKYOU']?></h1>
<p>
<?php echo $GLOBALS['locSESSIONCLOSED']?>
</p>

<p>
<a href="login.php"><?php echo $GLOBALS['locBACKTOLOGIN']?></a>
</p>

</form>
</body>
</html>
<?php

