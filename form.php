<!DOCTYPE html>
<html lang="pt">

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
        <br>Sexo: <input type=radio name="CAMPO_SEXO" value="M">Masculino
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