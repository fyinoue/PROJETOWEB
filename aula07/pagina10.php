<html>
    <head>
        <title>Formulário</title>
    </head>
    <body>
        <form method="POST" action="pagina10action.php">
            <label for="marca">Marca: </label>
            <select name="marca" id="marca">
                <option value="">Selecione uma marca</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Ford">Ford</option>
                <option value="Honda">Honda</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
            </select>
            <button type="submit" onclick="return testaCampos();">Enviar</button>
        </form>
    </body>
</html>
<script>
    function testaCampos() {
        var $marca = document.getElementById("marca").checked;
        
        if(document.getElementById("marca").value == "") {
            alert("O campo MARCA é obrigatório!");
            document.getElementById("marca").focus();
            return false;
        }
    }
</script>