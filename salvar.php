<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Link</title>
    <link rel="stylesheet" href="./css/salvar.css">
</head>
<body>

    <?php require_once("./_menu.php");?>

    <div class="conteudo">
        <h1 class="titulo">Salvar Link</h1>

        <form action="salvarbd.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <label for="link">Link: </label>
                <input type="url" name="link" id="link">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="desc">Descrição:  </label>
                <input type="text" name="desc" id="desc">
            </div>
       </div>

        <div class="row">
            <div class="col">
                <label for="categoria">Categoria: </label>
                <input type="text" name="categoria" id="categoria">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="foto">Foto de Capa do Site:</label>
                <input type="file" name="foto" id="foto">
            </div>
        </div>

        <div class="botoes">
            <a href="./visualizar.php" class="btnvoltar">Voltar</a>
            <input type="submit" value="Salvar" class="btnatualizar">
        </div>
        </form>
    </div>
</body>
</html>