<html>
<head>
    <title> es7</title>
<body>
<?php
require("include/lib.php");

$naz = array('India', 'Nigeria', 'Cina', 'Usa', 'Pakistan',  'Rdc',  'Indonesia',  'Etiopia',  'Egitto', 'Tanzania');
$p1 = array(1370000000, 208000000, 1405000000, 330000000, 220000000,  101000000,  269000000,  100000000,  101000000, 57000000);
$p2 = array(1090000000,  791000000, 732000000, 336000000, 248000000,  246000000,  229000000,  223000000,  199000000, 186000000);
$antonino = array();

differenza($p1, $p2, $antonino);
maximo($antonino, $imax);
echo "<br> nazione con l aumento piu alto e  "   .$naz[$imax]. " con un incremento  di "   .$antonino[$imax]. "<br>";









?>
</body>
</html>