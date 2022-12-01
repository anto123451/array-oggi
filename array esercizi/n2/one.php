<html>
    <head><title>prova</title></head>
    <body>
        <?php


        $numeri = array();
        $risultato= array();

for($i=0;$i<20;$i++)
{
$numeri[$i]=(int) rand(1,100);
}


for($j=0;$j<20;$j++){

    if($numeri[$j]%2==0){
        $risultato[$j]=$numeri[$j]+10;
    }else {
        $risultato[$j]=$numeri[$j]-100;
    }
}


print_r($numeri);
echo"<br>";
print_r($risultato);














?>
    </body>
</html>