<?php

$texto = $_POST['entradaTexto'];

echo $texto."<hr />";
$texto = preg_replace('/[.,]/', '', $texto);
$palavras = explode(' ', $texto);
$total = count($palavras);
echo "Quantidade de palavras: ".$total."<hr />";

if($total > 0) {
    if($total < 10) {
        echo "Última palavra: ".$palavras[$total-1];
    }
    else if($total < 15) {
        echo "Quinta palavra: ".$palavras[5-1];
    }
    else {
        $doze = $palavras[12-1];
        if(strlen($doze) > 5) {
            echo strtoupper(substr($doze, strlen($doze)-3, strlen($doze)));
        }
        else {
            echo strtoupper($doze);
        }
    }
}



/*
Na página php criar uma rotina para contar a quantidade de palavras
    Imprimir a quantidade de palavras
se a quantidade de palavras for menor que 10 
    imprimir a última palavra
Se a quantidade de palavras for maior que 10
    imprimir a 5ª palavra
se a quantidade de palavras for maior que 15 
    se o tamanho da 12ª palavra for maior que 5
        imprimir as três últimas letras da 12ª palavra em caixa alta
    senão
        imprimir toda a 12ª palavra em caixa alta
 */

?>