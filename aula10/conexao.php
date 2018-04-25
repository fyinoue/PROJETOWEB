<?php

$host = "localhost";
$user = "iesb";
$password = "iesb";
$database = "db_empresa";

$conn = mysqli_connect($host, $user, $password);

if($conn) {
    print("<hr>Conectei!<hr>");
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

$sql = " SELECT * FROM tb_tipo ";
$result = mysqli_query($conn, $sql);
//$registro = mysqli_num_rows($result);
//echo("Total de registros da tb_tipo: $registro<br>");

echo("<table border='1'");
if(mysqli_num_rows($result) > 0) {
    echo("<tr><th>Codigo</th><th>Tipo</th></tr>");
    $cont = 0;
    while($rs = mysqli_fetch_array($result)) {
        $cor = "#FFFFFF";
        if($cont%2 == 0) { $cor = "#00AAFF"; }
        echo "<tr bgcolor='$cor'><td>".$rs["id_tipo"]."</td><td>".$rs["tx_tipo"]."</td></tr>";
        $cont++;
    }
}
else {
    echo "<p>Não há registros</p>";
}
echo("</table>");


$sql = " SELECT * FROM tb_produto ";
$result = mysqli_query($conn, $sql);
//$registro = mysqli_num_rows($result);
//echo("Total de registros da tb_tipo: $registro<br>");

echo("<table border='1'");
if(mysqli_num_rows($result) > 0) {
    echo("<tr><th>Codigo</th><th>Nome</th><th>Quantidade</th><th>Preço</th><th>Tipo</th></tr>");
    $cont = 0;
    while($rs = mysqli_fetch_array($result)) {
        $cor = "#FFFFFF";
        if($cont%2 == 0) { $cor = "#AA00FF"; }
        echo "<tr bgcolor='$cor'><td>".$rs["id_produto"]."</td><td>".$rs["tx_produto"]."</td>";
        echo "<td>".$rs["ni_qtd"]."</td><td>".$rs["nf_preco"]."</td><td>".$rs["id_tipo"]."</td></tr>";
        $cont++;
    }
}
else {
    echo "<p>Não há registros</p>";
}
echo("</table>");