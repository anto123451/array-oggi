<?php
function miximo($n1x, &$n2x)
{
$j=101;
for($i=0;$i<10;$i++)
    {
        if($n1x[$i]<$j)
        {
            $j=$n1x[$i];
            $n2x=$i;
        }
    }

}
function perc($n1x, &$n2x)
{
    for($i=0;$i<10;$i++)
    {
        if(($n1x[$i]>50)&&($n1x[$i]<75))
        {
            $conta++;
        }
        
    }
    $n2x=$conta/10*100;
}
function russoa($n1x, $n2x, &$n3x)
{
    $j=0;
    for($i=0;$i<10;$i++)
    {
        if($n1x[$i]<30)
        {
            $n3x[$j]=$n2x[$i];
            $j++;
        }
        
    }
}
function russof($n1x, &$n2x)
{
    for($i=0;$i<10;$i++)
    {
        if($n1x[$i]>90)
        {
            $tot=$tot+$n1x[$i];
            $conta++;
        }
        
    }
    if($tot!=0)
    {
    $n2x=$tot/$conta;
    }
    else{
        $n2x=0;
    }
}







?>