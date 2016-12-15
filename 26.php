<?php
/*
Если под парными подразумеваются четные индексы:
 */

function findMultiple(array $arr){
    $result = 1;
    foreach ($arr as $key => $value){
        if(!($key % 2) && ($value > 0)){
            $result *= $value;
        }
    }
    return $result;
}

function showOdds (array $arr){
    foreach ($arr as $key => $value){
        if (($key % 2) && ($value > 0)){
            echo "[" . $key . "] => " . $value . "<br/>";
        }
    }
}

$arr = [];
for ($count = 0; $count < 20; $count++){
    $arr[$count] = rand(1, 100);
}
echo "The result is " . findMultiple($arr) . "<br/>";
showOdds($arr);
