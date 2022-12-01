<html>
    <head>
        <title>es</title>
    </head>
    <body>
        <?php
        
        require("lib.php");


        $n=3000;
        
        $nomi=array('take 4', 'quevedo', 'chiagne', 'acqua tonica', 'buona notte', 'ricordi', 'bella fregatura', 's!r!', 'la bellavita', 'capri sun');
        $ripeti=array();
        for($i=0; $i<10; $i++){
            $ripeti[$i]=rand(1, 5000);
        }
      
        print_r($ripeti);
        $x=meno($ripeti);
        echo"$x" .  "<br>";


        $z=brano($ripeti, $n);
        echo"$z";
     






















?>
    </body>
</html>