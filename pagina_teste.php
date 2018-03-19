<?php
    $vet = array(2, 4, 6, 8, 10);
    
    print(count($vet)."<br />");
    
    for($k=0; $k<count($vet); $k++){
        echo($vet[$k]."<br />");
    }
    
    $k = 0;
    while($k < count($vet)) {
        echo($vet[$k]."<br />");
        $k++;
    }
    
    $k = 0;
    do {
        echo($vet[$k]."<br />");
        $k++;
    }while($k < count($vet));
    
    foreach($vet as $value) {
        print($value."<br />");
    }
    
    $arrPreco = array("arroz"=>10.52,
                      "feijao"=>4.78,
                      "cafe"=>15.27);
    
    print("Preço do arroz = ".$arrPreco["arroz"]."<br />");
    print "<hr>";
    print_r($arrPreco);
    
    echo "<hr />";
    $n1 = 10;
    $n2 = 20;
    
    if($n1 > $n2) {
        print("N1 é maior que N2");
    }
    else if($n2 > $n1) {
        print("N2 é maior que N1");
    }
    else {
        print("N1 é igual a N2");
    }
    
    echo "<hr />";
    $num = 5;
    $fat = 1;
    for($k=$num; $k > 0; $k--){
        $fat = $fat * $k;
        echo $fat."<br />";
    }
    
    echo "<hr />";
    function fatorial(int $num) {
        if($num != 1) {
            return $num * fatorial($num-1);
        }
        else {
            return 1;
        }
    }
    
    echo fatorial(5);
    
    echo "<hr />";
    function fibonacci(int $num) {
        if($num < 2) {
            return 1;
        }
        else {
            return fibonacci($num-1) + fibonacci($num-2);
        }
    }
    
    echo fibonacci(10);
    
?>