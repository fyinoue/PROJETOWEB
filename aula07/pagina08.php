<?php
    $n1 = 1300;
    $n2 = 25;
    
    echo "MDC de ".$n1." e ".$n2." é: ".mdc($n1, $n2);

    function mdc($n1, $n2) {
        if($n2 == 0) {
            return $n1;
        }
        else {
            return mdc($n2,($n1%$n2));
        }
    }
?>