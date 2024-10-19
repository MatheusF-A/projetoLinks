<?php

    require_once("./conexao/conexao.php");

     $id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

    try {

        $sql = "SELECT * FROM links WHERE idURL =".$id; //comando SQL a ser executado 
        
        $dadosSelecionados = $conexao->query($sql); //Variavel recebe os dados do banco pelo query

        $dados = $dadosSelecionados ->fetch(PDO::FETCH_ASSOC); //Variavel dados é uma matriz com todos os dados da tabela

        $totalRegistros = $dadosSelecionados->rowCount(); //retorna o total de registros selecionados

    } catch (\PDOException $e) {
        echo("Erro ao11 se conectar com o banco. ".$e);
        exit();
    }