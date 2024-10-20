<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUIR LINK</title>
    <link rel="stylesheet" href="./css/salvar.css">
</head>
<body>

    <?php require_once("./_menu.php");?>

    <div class="conteudo">
        <h1 class="titulo">EXCLUIR LINK</h1>

        <?php require_once("./excluir-view.php");?>

        <form action="excluirbd.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id" id="id" value ="<?=$dados['idURL'];?>">

        <div class="row">
            <div class="col">
                <label for="link">Link: </label>
                <input type="url" name="link" id="link" value="<?=$dados['link'];?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="desc">Descrição: </label>
                <input type="text" name="desc" id="desc" value="<?=$dados['descricaoURL'];?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" id="categoria" value="<?=$dados['categoriaURL'];?>">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" id="foto">
            </div>
        </div>

        <div>
            <input type="reset" value="Voltar" href="./visualizar.php">
            <input type="submit" value="Excluir" >
        </div>
        </form>
    </div>

</body>
</html>