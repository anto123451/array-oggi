<?php

function meno($a){
    $j=5001;
    for($i=0; $i<10; $i++){
        if($a[$i]<$j){
            $j=$a[$i];
        }
    }
    return $j;
}

function brano($a, $b){

    for($i=0; $i<10; $i++){
        if($a[$i]>$b){
           $b[$i]=$a[$i];
           
        }

    }
    return $b;
}




























?>