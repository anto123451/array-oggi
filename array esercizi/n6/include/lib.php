<?php
function differenza($n1x, $n2x, &$n3x,)
{
for($i=0;$i<10;$i++)
    {
        $n3x[$i]=$n2x[$i]-$n1x[$i];
    }

}




function maximo($n1x, &$n2x)
{
$j=1;
for($i=0;$i<10;$i++)
    {
        if($n1x[$i]>$j)
        {
            $j=$n1x[$i];
            $n2x=$i;
        }
    }

}
?>