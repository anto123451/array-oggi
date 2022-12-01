<?php


function creaarraymass($punt,&$imax)
    {
        $imax=0;
        for($i=1;$i<10;$i++)
        {
            if($punt[$imax]<$punt[$i])
            {
                $imax=$i;
            }
        }
    }




function mediaa($punt){
    $t=0;
    $j=0;
    for($i=0;$i<10;$i++)
        {
            $t+=$punt[$i];
            $j++;
        }
        $med=$t/$j;
        return $med;
}

function creaarraypercp($punt,&$percp)
    {
        $j=0;
        for($i=0;$i<10;$i++)
        {
            if(($punt[$i]>180)&&($punt[$i]<210))
            {
                $j++;
            }
        }
        $percp=(($j/10)*100);
    }



    function creaarraydue($punt,$piloti,&$ep)
    {
        for($i=0;$i<10;$i++)
        {
            if($punt[$i]>200)
            {
                $ep[$i]=$piloti[$i];
            }
        } 
    }



?>