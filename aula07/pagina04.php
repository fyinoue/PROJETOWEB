<?php

    $n1 = 1;
    $n2 = 1;
    $n3 = 1;
    
    bhaskara($n1, $n2, $n3);
    
    function bhaskara($a, $b, $c) {
        $delta = pow($b, 2)-(4*$a*$c);
        
        if($delta < 0) {
            echo "Raízes Imaginárias";
        }
        else {
            $x1 = ((-$b)+(sqrt($delta)))/2*$a;
            $x2 = ((-$b)-(sqrt($delta)))/2*$a;
            echo "Raiz 1: ".$x1."<br />";
            echo "Raiz 2: ".$x2."<br />";
        }       
        
    }

?>