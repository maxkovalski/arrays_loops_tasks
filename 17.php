<?php

$month = "december";

$months = [
    "january",
    "february",
    "march",
    "april",
    "may",
    "june",
    "july",
    "august",
    "september",
    "october",
    "november",
    "december",
];

foreach ($months as $value){
    echo ($month == $value ? "<b>$value</b><br/>" : "$value<br/>");
}