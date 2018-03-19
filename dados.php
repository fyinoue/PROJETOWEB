<?php

    $txNome = $_POST['txNome'];
    echo "Nome: ".$txNome."<br />";
    
    $txEnder = $_POST['txEnder'];
    echo "Endereço: ".$txEnder."<br />";
    
    $txSexo = $_POST['txSexo'];
    echo "Sexo: ".$txSexo."<br />";
    
    $txTurno = $_POST['txTurno'];
    echo "Turno: ";
    for($k = 0; $k < count($txTurno); $k++) {
        print($txTurno[$k]."<br />");
    }
    
    foreach($txTurno as $value) {
        print($value."<br />");
    }
    
    $txCargo = $_POST['txCargo'];
    echo "Cargo: ".$txCargo."<br />";
    
    
?>