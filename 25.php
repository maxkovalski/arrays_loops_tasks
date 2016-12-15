<?php

function swapMaxMin(array &$arr){
    reset($arr);
    $max = current($arr);
    $min = current($arr);
    foreach ($arr as $value){
        if ($max < $value){
            $max = $value;
        } else if ($min > $value){
            $min = $value;
        }
    }
    $arr[array_search($max, $arr)] = $min;
    $arr[array_search($min, $arr)] = $max;
}


$arr = [];
for ($count = 0; $count < 10; $count++){
    $arr[$count] = rand();
}

echo "<pre>";
print_r($arr);
echo "</pre>";
swapMaxMin($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";





