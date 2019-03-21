<?PHP 
    mb_internal_encoding("UTF-8"); 
    mb_http_output( "iso-8859-1" );  
    ob_start("mb_output_handler");   
    header("Content-Type: text/html; charset=ISO-8859-1",true);
    #dados para a conexão com o banco de dados;
    $servidor = 'localhost'; #ip do servidor
    $usuario = 'isaias';          #Usuario para acessar o banco
    $senha = 'kyzasd39XZ#@';      #Senha do banco
    $banco = 'adbadb';            #nome do database

    #executa a conexão com o mysql;
    
    $conn = new mysqli($servidor, $usuario, $senha, $banco);
    if ($conn->connect_error) {
        die("conexão falhou: " . $conn->connect_error);
    } 
   
  
    
    #verifica se o arquivo foi chamado a partir de um formulário;
    if($_REQUEST["acao"] == "adicionar"){
        #FAZENDO O INSERT

        $nome = $_REQUEST["nome"];
        $telefone_fixo = $_REQUEST["telefone_fixo"];
        $telefone_celular = $_REQUEST["telefone_celular"];
        $congregacao = $_REQUEST["congregacao"];

        if(isset($nome) && isset($congregacao)){
            $sql = "INSERT INTO alunos (nome, telefone_fixo, telefone_celular, congregacao) VALUES (";
            $sql .= "'".$_REQUEST["nome"]."', ";
            $sql .= "'".$_REQUEST["telefone_fixo"]."', ";
            $sql .= "'".$_REQUEST["telefone_celular"]."', ";
            $sql .= "'".$_REQUEST["congregacao"]."'";
            $sql .= ");";
    
             if ($conn->query($sql) === TRUE) {
 ?>
<!DOCTYPE html>
<html>

<head>
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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="jQuery-Mask-Plugin/dist/jquery.mask.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
    $( document ).ready(function() {
        $('.bd-example-modal-sm').modal('show');
    });
 
    </script>
</head>

<body>

    </div><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small
        modal</button>

    <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <?PHP echo $conn->insert_id; ?>
            </div>
        </div>
    </div>
</body>

</html>
<?PHP              
                //header('Location: form.php');
               
            } else {
                echo "Erro: " . $sql . "<br>" . $conn->error;
            }
        }else{
            echo 'Falta o nome e/ou a congregacao...';
        }

      
    }
    
        $conn->close();
  
?>