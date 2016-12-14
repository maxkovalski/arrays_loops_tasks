<?php

$result = "Result";
if(isset($_POST['uString']) && isset($_POST['uDigit'])){
    if (is_numeric($_POST['uString']) && is_numeric($_POST['uDigit'])){
        $count = 0;
        $arr = str_split($_POST['uString']);
        $dig = $_POST['uDigit'];
        foreach ($arr as $value){
            if ($value == $dig){
                $count++;
            }
        }
        $result = "$dig in Your number meets $count times";
    } else {
        $result = "Please, enter valid numbers";
    }
}