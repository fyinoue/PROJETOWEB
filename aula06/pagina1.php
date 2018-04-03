<?php

//is_numeric()
//is_integer()
//is_float()
//is_string()

    $var = array(1, 2, 3, 4, 5);
    
    print_r($var);
    
    if(is_numeric($var)) {
        echo "É numérico!<br />";
    }
    
    if(is_integer($var)) {
        echo "É inteiro!<br />";
    }
    
    if(is_float($var)) {
        echo ("É flutuante!<br />");
    }
    
    if(is_string($var)) {
        echo ("É uma string!<br />");
    }

    if(is_array($var)) {
        echo "É um array!<br />";
    }
    
    if(is_bool($var)) {
        echo "É um booleano!<br />";
    }
?>