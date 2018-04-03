<?php
    $mensagem = "Bem vindo ao mundo PHP!";
    
    echo ("$mensagem");   
    echo "<hr />";
    
    $palavras = explode(" ", $mensagem);
    print_r($palavras);
    echo "<hr />";
    
    for($k = 0; $k < count($palavras); $k++) {
        echo($palavras[$k] . "<br />");
    }
?>