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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>

    </script>
</head>

<body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      ...
    </div>
  </div>
</div><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-sm">Small modal</button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <? echo $conn->insert_id; ?>
    </div>
  </div>
</div>
</body>

</html>
<?               
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