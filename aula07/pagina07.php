<?php

    $n1 = 5;
    $n2 = 20;
    
    echo potencia($n1,$n2);
    
    function potencia($n1, $n2) {
        if($n2 > 0) {
            return ($n1*potencia($n1,$n2-1));
        }
        else {
            return 1;
        }
    }

?>