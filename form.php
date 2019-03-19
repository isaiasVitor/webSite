<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EXEMPLO - Formulário</title>
    <script language="JavaScript">
    function validaForm() {
        
        var tamanho_nome = document.forms["meuForm"].CAMPO_NOME.value.length;
            
        if (tamanho_nome < 1 || tamanho_nome > 64) {
            alert("O campo 'Nome' deve ter entre 2 e 64 caracteres.");
            return false;
        } else {
            alert("OK...");
            return true;
        }
    }
    </script>

</head>

<body>
    <form action="?action=save" name="meuForm" method="post">
        Nome: <input type="text" name="CAMPO_NOME" required>
        <br>idade: <input type="text" name="CAMPO_IDADE" required>
        <br>E-mail: <input type="email" name="CAMPO_IDADE" required>
        <br>Sexo: <input type=radio name="CAMPO_SEXO" value="M" >Masculino
        <input type=radio name="CAMPO_SEXO" value="F">Feminino

        <br>Curso: <select name="CAMPO_CURSO" required>
            <option selected value="Selecione..."></option>
            <option value="Ciência da Computação"></option>
            <option value="Bacharelado em Informática"></option>
            <option value="Engenharia da COmputação"></option>
        </select>

        <br>Conhecimentos:
        <input type="CHECKBOX" nome="CAMPO_CONHECIMENTOS[]" value="Word">Microsoft Word
        <input type="CHECKBOX" nome="CAMPO_CONHECIMENTOS[]" value="HTML">HTML
        <input type="CHECKBOX" nome="CAMPO_CONHECIMENTOS[]" value="JS">JavaScript
        <input type="CHECKBOX" nome="CAMPO_CONHECIMENTOS[]" value="PHP">PHP

        <br>
        <input type="reset" value="Limpar">
        <input type="button" onClick="validaForm()" value="Salvar">
    </form>
</body>

</html>