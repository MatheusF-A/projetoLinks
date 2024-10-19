<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $link        = filter_input (INPUT_POST,"link",    FILTER_SANITIZE_SPECIAL_CHARS);
    $desc        = filter_input (INPUT_POST,"desc",   FILTER_SANITIZE_SPECIAL_CHARS);
    $categoria   = filter_input (INPUT_POST,"categoria",    FILTER_SANITIZE_SPECIAL_CHARS);
    

    if(!empty($_FILES["foto"]["name"])){
        $foto = uniqid(rand(), false)."-".basename($_FILES["foto"]["name"]);
        $pasta = "./upload/";
    }else{
        $foto ="sem-foto.jpg";
    }

    try {
        
        require_once("./conexao/conexao.php");

        $comandoSQL = $conexao->prepare(
        "INSERT INTO links
                (link, 
                descricaoURL, 
                categoriaURL, 
                foto) 
                VALUES 
                (:link,
                :descricao,
                :categoria,
                :foto)"
        );

        $comandoSQL->execute (array 
            (":link"       =>  $link,
            ":descricao"   =>  $desc,
            ":categoria"   =>  $categoria,
            ":foto"        =>  $foto)
        );

        if($comandoSQL->rowCount() > 0) 
        {
            move_uploaded_file($_FILES["foto"]["tmp_name"], $pasta.$foto);
            header("location:./visualizar.php");
            exit();
        } 
        else
        {
            echo"Erro na Inserção";
        }

    } 
    catch (PDOException $erro) 
    {
        echo "Erro na gravação dos dados.";
        echo $erro;
    }
}
else
{
    echo("Erro na conexão");
}