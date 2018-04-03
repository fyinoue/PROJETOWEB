<?php

    $n1 = 10;
    $n2 = 20;
    
    echo ("O maior é: " . maxMin($n1, $n2));

    function maxMin($num1, $num2) {
        if ($num1 > $num2) {
            return $num1;
        }
        return $num2;
    }

?>