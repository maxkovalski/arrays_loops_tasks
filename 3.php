<?php

$arr = [26, 17, 136, 12, 79, 15];

$result = 0;

foreach ($arr as $item):
    $result += $item**2;
    endforeach;

echo "The sum of the elements squared is ", $result;


