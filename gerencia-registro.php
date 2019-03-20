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




        $sql = "INSERT INTO alunos (nome, telefone_fixo, telefone_celular, congregacao) VALUES (";
        $sql .= "'".$_REQUEST["nome"]."', ";
        $sql .= "'".$_REQUEST["telefone_fixo"]."', ";
        $sql .= "'".$_REQUEST["telefone_celular"]."', ";
        $sql .= "'".$_REQUEST["congregacao"]."'";
        $sql .= ");";

         if ($conn->query($sql) === TRUE) {
            $var =  json_encode($_REQUEST);
            echo $var;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
        $conn->close();
  
?>

