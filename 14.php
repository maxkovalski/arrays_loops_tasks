<?php

$arr = [4, 2, 5, 19, 13, 0, 10];
$e = [2, 3, 4];
foreach ($arr as $fValue){
     foreach ($e as $sValue){
        if($fValue === $sValue) {
            echo "Есть!<br/>";
            continue 2;
        }
    }
    echo "Нет!<br/>";
}