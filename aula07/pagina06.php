<?php

    media(0,10,10,'P');

    function media ($n1, $n2, $n3, $tipo) {
        if(($tipo == 'A')||($tipo == 'a')) {
            echo "Média Aritmética: ".($n1+$n2+$n3)/3;
        }
        else if(($tipo == 'P')||($tipo == 'p')) {
            echo "Média Ponderada: ".($n1*5+$n2*3+$n3*2)/10;
        }
        else {
            echo "Opção Inválida!";
        }
    }

?>