<?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($arr as $value){
    static $count = 1;
    echo $value;
    if($count != 3){
        echo ", ";
        $count++;
    } else {
        echo " ";
        $count = 1;
    }
}