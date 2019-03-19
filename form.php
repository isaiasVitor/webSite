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
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>EXEMPLO - Formulário</title>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    jQuery(function($) {
	$.mask.definitions['~']='[+-]';
	//Inicio Mascara Telefone
	$('input[type=tel]').focusout(function(){
		var phone, element;
		element = $(this);
		element.unmask();
		phone = element.val().replace(/\D/g, '');
		if(phone.length > 10) {
			element.mask("(99) 99999-999?9");
		} else {
			element.mask("(99) 9999-9999?9");
		}
	}).trigger('focusout');
	//Fim Mascara Telefone
	
});
    </script>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">ADBA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Discipulado
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Cadastrar aluno</a>
                        <a class="dropdown-item" href="#">Registrar Presenças</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Apurar Resultados</a>
                        <a class="dropdown-item" href="#">Exportar Planilha</a>

                    </div>
                </li>

            </ul>

        </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Formulario de cadastro para Discipulado ADBA
        </div>
        <div class="card-body">
            <form class="needs-validation" novalidate style="padding:10px;">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="name">Nome Completo</label>
                        <input type="text" class="form-control" id="name" placeholder="Nome Completo" required>
                        <div class="invalid-feedback">
                            Por favor digite um nome valido
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefone">Telefone</label>
                        <input type="tel" class="form-control telefone" name="telefone" id="telefone"
                            placeholder="(xx) xxxxx-xxxx" required>
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="congregação">Selecione a Congregação</label>
                        <select class="custom-select my-1 mr-sm-2" id="congregação">
                            <option selected>Choose...</option>
                            <option value="Sede">Sede</option>
                            <option value="Pq. São Paulo">Pq. São Paulo</option>
                            <option value="Jd. Europa">Jd. Europa</option>
                            <option value="Jd. Portugal">Jd. Portugal</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="invalidCheck" required>
                        <label class="form-check-label" for="invalidCheck">
                            Agree to terms and conditions
                        </label>
                        <div class="invalid-feedback">
                            You must agree before submitting.
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </form>
        </div>
    </div>


</body>

</html>