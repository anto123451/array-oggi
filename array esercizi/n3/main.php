<html>
    <head><title>prova</title></head>
    <body>
        <?php

        include("lib.php");


        $piloti=array('Bagnaia','Quartararo','Bastianini','Espargaro','Miller','Binder','Rins','Zarco','Martin','Oliveira');
        $punt=array('265','248','219','212','189','188','173','166','152','149');

        $x=mediaa($punt);
        echo" la media è: $x";

        $mass=array();
        creaarraymass($punt,$mass);
        echo "<br>Il pilota con il maggior punteggio e ".$piloti[$mass]." con ".$punt[$mass]."<br>";


        creaarraypercp($punt,$percp);
        echo "La percentuale dei piloti che hanno un punteggio compreso fra 180 e 210 e ".$percp."%<br>";

        $pilo=$_GET['pilo'];
        echo "Il pilota ".$piloti[$pilo]." ha un punteggio di ".$punt[$pilo]." <br>";

        $ep=array();
        creaarraydue($punt,$piloti,$ep);
        print_r($ep);





?>
    </body>
</html>