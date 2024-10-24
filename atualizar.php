<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar - Links</title>
    <link rel="stylesheet" href="./css/salvar.css">
</head>
<body>

    <?php require_once("./_menu.php");?>

    <div class="conteudo">
        <h1 class="titulo">ATUALIZAR LINK</h1>

        <?php require_once("./atualizar-view.php");?>

        <form action="atualizarbd.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" id="id" value ="<?=$dados['idURL'];?>">
        <input type="hidden" name="fotoant" id="fotoant" value ="<?=$dados['foto'];?>">


        <div class="row">
            <div class="col">
                <label for="link">Link: </label>
                <input type="url" name="link" id="link" value="<?=$dados['link'];?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="desc">Descrição:  </label>
                <input type="text" name="desc" id="desc" value="<?=$dados['descricaoURL'];?>">
            </div>

            <div class="col">
                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" Cd="categoria" Calue="<?=$dados['categoriaURL'];?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="foto">Alterar Foto: </label>
                <input type="file" name="foto" id="foto">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="foto">Icone Atual do Site:</label>
            </div>
        </div>
        
            <img src="./upload/<?=$dados['foto'];?>" alt="Imagem do Link" class="excluirimg">

        <div class="botoes">
            <a href="./visualizar.php" class="btnvoltar">Voltar</a>
            <input type="submit" value="Salvar" class="btnatualizar">
        </div>
        </form>

        </form>
    </div>

</body>
</html>