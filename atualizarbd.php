<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $id           = filter_input(INPUT_POST,"id", FILTER_SANITIZE_NUMBER_INT);
        $link         = filter_input(INPUT_POST,"link", FILTER_SANITIZE_URL);
        $desc         = filter_input(INPUT_POST,"desc", FILTER_SANITIZE_SPECIAL_CHARS);
        $categoria    = filter_input(INPUT_POST,"categoria", FILTER_SANITIZE_SPECIAL_CHARS);

        require_once("./conexao/conexao.php");
        $fotoant = filter_input(INPUT_POST, "fotoant", FILTER_SANITIZE_SPECIAL_CHARS);

        if(!empty($_FILES["foto"]["name"])){
            $foto = uniqid(rand(), false)."-".basename($_FILES["foto"]["name"]);
            $pasta = "./upload/";
            
            $flag = true; // foto foi alterada.

        }else{
            $foto = $fotoant;
            $flag = false; //foto não alterada.
        }

        $sql = "UPDATE links SET 
                    idURL          = :id,
                    link           = :link,
                    descricaoURL   = :descricao,
                    categoriaURL   = :categoria,
                    foto           = :foto
                WHERE idURL   = :id";

        $comandoSQL = $conexao->prepare($sql);

        $comandoSQL->execute(array(
        ":id"        => $id,
        ":link"      => $link,
        ":descricao" => $desc,
        ":categoria" => $categoria,
        ":foto"      => $foto)
        );

        if($comandoSQL->rowCount() > 0){

            if ($flag){
                unlink($pasta.$fotoant); //apaga a foto anterior;
                move_uploaded_file($_FILES[foto][tmp_name], $pasta.$foto); //envia a nova foto. 
            }
            
            header("location:./visualizar.php");
            exit();
        }    

    }else{
        echo("Erro na Atualização.");
    }
