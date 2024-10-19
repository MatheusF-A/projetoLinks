<?php
    require_once("./conexao/conexao.php");

    try {

        $sql = "SELECT * FROM links"; //comando SQL a ser executado 
        
        $dadosSelecionados = $conexao->query($sql); //Variavel recebe os dados do banco pelo query

        $dados = $dadosSelecionados ->fetchAll(); //Variavel dados é uma matriz com todos os dados da tabela

        $totalRegistros = $dadosSelecionados->rowCount(); //retorna o total de registros selecionados

    } catch (\PDOException $e) {
        echo("Erro ao se conectar com o banco. ");
        exit();
    }