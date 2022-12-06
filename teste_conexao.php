<?php
    //Criar 4 variáveis:
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassWord = '';
    $dbName = 'formulario_db';

    //Variável de conexão do formulário com a base de dados:
    $dbConexao = new mysqli($dbHost,$dbUsername,$dbPassWord,$dbName); 
    
    //Verificar se a conexão foi efetuada:
    if($dbConexao->connect_errno)  {
        echo "<br><br><br>Erro ao fazer conexão com a base de dados!";
    }
    else  {
        echo "<br><br><br>Conexão com a base de dados efetuada com sucesso!";
    }
?>