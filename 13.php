<?php

for($fNum = 1; $fNum < 10; $fNum++){
    echo "<div style='float: left; margin-left: 10px; width: 75px;'>";
    for($sNum = 1; $sNum < 10; $sNum++){
        echo $fNum . " * " . $sNum . " = " . $fNum * $sNum . "<br/>";
    }
    echo "<br/></div>";
}