<?php

require_once "./conexao/conexao.php";

$data_original = $linha["dataCadastroURL"];

$data = DateTime::createFromFormat('Y/m/d', $data_original);
$data_formatada = $data -> format('d/m/Y');

echo $data_formatada; 