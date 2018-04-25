<?php

$host = "localhost";
$user = "iesb";
$password = "iesb";
$database = "db_empresa";

$conn = mysqli_connect($host, $user, $password);

if(!$conn) {
    if(mysqli_select_db($conn, $database)){
        print("Selecionei o banco $database<br>");
    }
    else {
        die("Erro: Não consegui selecionar o banco $database");
    }
}
else {
    die("<hr>Problemas de conexão<hr>"); 
}
?>