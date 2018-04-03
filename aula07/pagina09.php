<?php

    $nomes = array(
        0 => "Fulano",
        1 => "Beltrano",
        2 => "Ciclano",
        3 => "Maria",
        4 => "Josefina",
        5 => "Cleusa"
    );

?>

<table>
    <tr>
        <th>Código</th>
        <th>Nome</th>
    </tr>
<?php
    foreach ($nomes as $cod => $nome) {
        echo "<tr>";
        echo "<td>".$cod."</td>";
        echo "<td>".$nome."</td>";
        echo "</tr>";
    }
?>
</table>    