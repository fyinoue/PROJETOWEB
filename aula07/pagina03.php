<?php

    $n1 = 10;
    $n2 = 20;
    
    olaMundo($n1,$n2);

    function olaMundo($num1, $num2) {
        $total = $num1 + $num2;
        for($k=0; $k<$total; $k++) {
            echo "Olá Mundo!<br />";
        }
    }

?>