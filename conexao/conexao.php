<?php
    $dns = "mysql:host=localhost;dbname=urlfatec;charset=utf8";
    $user = "root";
    $pass = "";

    try {

         $conexao = new PDO($dns, $user, $pass);
        //echo("Conexão Realizada");
        
    } catch (PDOException $erro) {
        echo("Erro ao se conectar ao banco de dados");
        //echo("Código do Erro:". $erro->getCode());
        exit();
    }

