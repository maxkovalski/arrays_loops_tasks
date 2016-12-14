<?php

$result = "Result";
if(isset($_POST['uString'])){
    if(is_numeric($_POST['uString'])){
        $arr = str_split($_POST['uString']);
        foreach ($arr as $value){
           $result += $value;
        }
    } else {
        $result = "Enter valid number!";
    }
}
