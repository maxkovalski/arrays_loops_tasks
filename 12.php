<?php

for($n = 1000, $num = 0; $n >= 50; $n /= 2, $num++);
echo "The number of iterations is ", $num, "<br/>";
echo "The final value of \$n is ", $n, "<br/>";