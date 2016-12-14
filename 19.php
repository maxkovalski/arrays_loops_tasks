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

$day = 3;

foreach ($week as $key => $value){
    echo ($key == $day ? "<b>$value</b><br/>" : "$value<br/>");
}