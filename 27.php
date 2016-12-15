<?php

// return string with a table to show
function createTable($rows, $cols, array $colors){
    $arr = generateNumbers($rows * $cols);
    $res = "<table>";
    for ($row = 0; $row < $rows; $row++){
        $res .= "<tr>";
        for ($col = 0; $col < $cols; $col++){
            $res .= "<td style='background-color: {$colors[array_rand($colors)]};'>";
            $res .= each($arr)[1];
            $res .= "</td>";
        }
        $res .= "</tr>";
    }
    $res .= "</table>";
    return $res;
}

// generate a count-sized array with random numbers
function generateNumbers($count){
    $arr = [];
    for($index = 0; $index < $count; $index++){
        $arr[$index] = rand();
    }
    return $arr;
}

$rows = 10;
$cols = 10;
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo createTable($rows, $cols, $colors);