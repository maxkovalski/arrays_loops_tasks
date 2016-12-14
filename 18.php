<?php

$week = [
    1 => "monday",
    "tuesday",
    "wednesday",
    "thursday",
    "friday",
    "saturday",
    "sunday",
];

foreach ($week as $key => $value){
    if($key == 6 || $key == 7){
        echo "<b>$value</b><br/>";
    } else {
        echo "$value<br/>";
    }
}