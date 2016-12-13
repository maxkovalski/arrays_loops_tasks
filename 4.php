<?php


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');

$str = "<table>";
foreach ($arr as $key => $value):
    $str .= "<tr><td>$key</td><td>=></td><td>$value</td></tr>";
endforeach;
$str .= "</table>";
echo $str;