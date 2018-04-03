function testaCampos() {
    var nome = document.getElementById("nome");
    var origem = document.getElementById("origem");
    var sexo = document.getElementById("sexo");
    var quarto = document.getElementById("quarto");
    var dias = document.getElementById("dias");
    var frigobar = document.getElementById("frigobar");

    if(nome.value == "") {
        alert("O campo NOME é obrigatório!");
        nome.focus();
        return false;
    }
    
    if(origem.value == "") {
        alert("O campo CIDADE DE ORIGEM é obrigatório!");
        origem.focus();
        return false;
    }
    
    if(sexo.value == "") {
        alert("O campo SEXO é obrigatório!");
        sexo.focus();
        return false;
    }
    
    if(quarto.value == "") {
        alert("O campo TIPO DE QUARTO é obrigatório!");
        quarto.focus();
        return false;
    }
    
    if(dias.value == "") {
        alert("O campo QUANTIDADE DE DIAS DE HOSPEDAGEM é obrigatório!");
        dias.focus();
        return false;
    }
    
    if(frigobar.value == "") {
        alert("O campo VALOR CONSUMIDO NO FRIGOBAR é obrigatório!");
        frigobar.focus();
        return false;
    }
}