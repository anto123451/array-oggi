<html>
<head>
    <title> es6</title>
<body>
<?php
require("include/lib.php");

$serie = array('The Crown', 'Manifest', 'Love is Blind', ' Breaking bed', 'From scratch',  'Warrior Nun',  'Inside Men',  'The Watcher',  'Gomorra', ' Guillermo del Toro');
$valutazione = array();
for($i=0;$i<10;$i++)
{
    $valutazione[$i]= rand(1, 100);
}
$elenco = array();
print_r($valutazione);
miximo($valutazione, $imax);
perc($valutazione, $russo);
russoa($valutazione, $serie ,$elenco);
russof($valutazione, $cristiano);

echo "<br> la serie con la valutazione piu alta e "   .$serie[$imax]. " con una valutazione di "   .$valutazione[$imax]. "<br>";
echo "la percentuale delle serie con valutazione compresa tra 50 e 75 e " .$russo. "<br>";
print_r($elenco);
echo "<br> la valutazione media delle serie con valore superiore a 90 e di " .$cristiano;





?>
</body>
</html>