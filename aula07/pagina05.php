<?php

    $n1 = 5;
    $n2 = 6;
    $n3 = 7;
  
    triangulo($n1, $n2, $n3);
    
    function triangulo($n1, $n2, $n3) {
        if(validaTriangulo($n1, $n2, $n3)) {
            if (($n1 == $n2)&&($n2 == $n3)) {
                echo "Triângulo Equilátero.";
            }
            else {
                if (($n1 != $n2)&&($n2 != $n3)) {
                    echo "Triângulo Escaleno.";
                }
                else {
                    echo "Triângulo Isósceles.";
                }
            }
        }
        else {
            echo "Triângulo inválido";
        }
    }
    
    
    function validaTriangulo($n1, $n2, $n3) {
        if(($n1 > $n2+$n3)||($n2 > $n1+$n3)||($n3 > $n1+$n2)) {
            return false;
        }
        else {
            return true;
        }
    }
    
?>