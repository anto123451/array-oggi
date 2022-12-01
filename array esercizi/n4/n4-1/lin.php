<?php
function padre($n1x, $n2x,&$n3x)
{

$j=2;
$l=2;
for($i=0; $i<4; $i++)
    {
        if($j!=0)
        {
            $j--;
            $n3x[$i]=$n1x[$j];
            
        }
        else
        {
            $n3x[$i]=$n1x[$l];
            $l++;
        }



    }
}






?>