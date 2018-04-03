<html>
    <head>
        <title>Resultado</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <style>
            .table {
                width: 500px;
                margin: 0 auto;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <table class="table table-bordered">
            <tr>
                <th>Campo</th>
                <th>Preenchido</th>
            </tr>
            <tr>
                <td>Nome</td>
                <td><?php echo $_POST['nome']; ?></td>
            </tr>
            <tr>
                <td>Cidade de Origem</td>
                <td><?php echo $_POST['origem']; ?></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td><?php echo $_POST['sexo']; ?></td>
            </tr>
            <tr>
                <td>Tipo de Quarto</td>
                <td><?php
                    if($_POST['quarto'] == 'Solteiro') {
                        echo 'Solteiro - R$75,00';
                    }
                    else {
                        echo 'Casado - R$125,00';
                    }
                ?></td>
            </tr>
            <tr>
                <td>Quantidade de Dias de Hospedagem</td>
                <td><?php echo $_POST['dias']; ?></td>
            </tr>
            <tr>
                <td>Valor Consumido no Frigobar</td>
                <td><?php echo 'R$'.$_POST['frigobar'].',00'; ?></td>
            </tr>
            <tr>
                <td>Valor Total</td>
                <td><?php
                    if($_POST['quarto'] == 'Solteiro') {
                        $total = 75*$_POST['dias']+$_POST['frigobar'];
                    }
                    else {
                        $total = 125*$_POST['dias']+$_POST['frigobar'];
                    }
                    echo 'R$'.$total.',00';
                ?></td>
            </tr>
        </table>
    </body>
</html>