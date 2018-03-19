<?php
    //criando variáveis
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    echo "Valor de num1 = $num1<br />";
    echo "Valor de num2 = $num2<br />";
    
    $soma = $num1 + $num2;
    echo "Soma = ".$soma."<br />";
    
    $subtracao = $num1 - $num2;
    echo "Subtração = ".$subtracao."<br />";
    
    $produto = $num1 * $num2;
    echo "Multiplicação = ".$produto."<br />";
    
    $quociente = $num1 / $num2;
    echo "Divisão = ".$quociente."<br />";
    
    $potencia = pow($num1, $num2);
    echo "Potência = ".$potencia."<br />";
?>