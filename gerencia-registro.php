<?PHP

    #dados para a conexão com o banco de dados
    $servidor = '18.228.137.119'; #ip do servidor
    $usuario = 'isaias';          #Usuario para acessar o banco
    $senha = 'kyzasd39XZ#@';      #Senha do banco
    $banco = 'adbadb';            #nome do database

    #executa a conexão com o mysql
    $link = mysql_connect($servidor, $usuario, $senha) or die('Não foi possivel conectar: '.mysql_error());

    #seleciona o banco de dados que deseja utilizar
    $select = mysql_select_db($banco);

    #verifica se o arquivo foi chamado a partir de um formulário
    if($_REQUEST["acao"] == "adicionar"){
        #FAZENDO O INSERT
        $sql = "INSERT INTO ALUNOS (NOME,TELEFONE_FIXO,TELEFONE_CELULAR,CONGREGACAO) VALUES (";
        $sql .= "'".$_REQUEST["nome"]."', ";
        $sql .= "'".$_REQUEST["telefone_fixo"]."', ";
        $sql .= "'".$_REQUEST["telefone_celular"]."', ";
        $sql .= "'".$_REQUEST["congregacao"]."', ";
        $sql .= ")";

        #executa a expressão SQL no servidor e armazena o resultado
        $result = mysql_query($sql);

        #verifica o sucesso da operação
        if(!result)
        {
            die('Erro:' .mysql_error());
        }else{
            #se a operação foi realizada com sucesso, informa na tela
            echo 'A Operação foi realizada com sucesso.';
        }
  
    }
    echo 'oi'
?>