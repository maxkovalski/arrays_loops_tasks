<?php

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$ru = [];
$en = [];
foreach($arr as $key => $value){
    $en[] = $key;
    $ru[] = $value;
}