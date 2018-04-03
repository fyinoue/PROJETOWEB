<?php
    $texto = "O rato roeu a roupa do rei de roma";
    echo($texto);
    echo("<hr />");
    $text = str_replace(' ', '####', $texto);
    echo($text);
    echo("<hr />");
    
    $nome = "Fulano de Tal";
    $primeiroNome = substr($nome, 0, 6);
    echo "Nome: ".$primeiroNome."<br />";
    
    $sobrenome = substr($nome, 7);
    echo "Sobrenome:".$sobrenome;
?>