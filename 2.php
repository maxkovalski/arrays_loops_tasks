<?php

$arr = [1, 20, 15, 17, 24, 35];

$result = 0;

foreach ($arr as $item){
    $result += $item;
}

echo "The sum of the elements is ", $result, "<br/>";
echo "The sum of the elements is ", array_sum($arr);