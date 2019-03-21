<?php
 ini_set('default_charset','ISO-8859-1');
 mb_internal_encoding("UTF-8"); 
 mb_http_output( "iso-8859-1" );  
 ob_start("mb_output_handler");   
 header("Content-Type: text/html; charset=ISO-8859-1",true);
?>

<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/form.css">
    <title>Cadastro de Aluno</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
    <script type="text/javascript" src="jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>
    <script type="text/javascript">
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


  
    </script>
    
    <script src="JS/jquery-3.3.1.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#exampleModalCenter').modal('show');
        jQuery('input.telefoneFixo').mask('(99) 9999-9999');
    console.log('jquery');
    jQuery('input.telefoneCelular').mask('(99) 9 9999-9999');
    
    });
    </script>
    


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ADBA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Discipulado
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="form.php">Cadastrar aluno</a>
                        <a class="dropdown-item" href="#">Registrar Presenças</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="table.php">Apurar Resultados</a>
                        <a class="dropdown-item" href="#">Exportar Planilha</a>

                    </div>
                </li>

            </ul>

        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            <p class="lead">Cadastro de pessoas para as aulas do Discipulado</p>
        </div>
        <div class="card-body">
            <form class="needs-validation formdetail" novalidate method="POST"
                action="gerencia-registro.php?acao=adicionar">
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="nome">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo"
                            required>
                        <div class="invalid-feedback">
                            Por favor digite um nome valido
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefoneFixo">Telefone Fixo</label>
                        <input type="tel" class="form-control telefoneFixo" name="telefone_fixo" id="telefoneFixo"
                            placeholder="(xx) xxxx-xxxx" >
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="telefoneCelular">Telefone Celular</label>
                        <input type="tel" class="form-control telefoneCelular" name="telefone_celular"
                            id="telefoneCelular" placeholder="(xx) xxxxx-xxxx" >
                        <div class="invalid-feedback">
                            Por favor digite um telefone valido.
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="congregacao">Selecione a Congregação</label>
                        <select class="custom-select my-1 mr-sm-2" name="congregacao" id="congregacao" required>
                            <option selected value="">Escolha...</option>
                            <option value="Sede">Sede</option>
                            <option value="Pq. São Paulo">Pq. São Paulo</option>
                            <option value="Jd. Europa">Jd. Europa</option>
                            <option value="Jd. Portugal">Jd. Portugal</option>
                        </select>
                        <div class="invalid-feedback">Selecione a Congregação</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-2 mb-3">
                        <button class="btn btn-primary btn-block" type="submit">Salvar</button>
                    </div>
                    <div class="col-md-2 mb-3">
                        <button class="btn btn-danger btn-block" type="reset">Limpar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if(isset($_REQUEST["idApostila"])){ ?>
       
    

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastro concluido</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?PHP echo "Numero da apostila é: " . $_REQUEST["idApostila"];?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>

</body>

</html>