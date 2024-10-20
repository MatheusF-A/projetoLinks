
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar - Links</title>
    <link rel="stylesheet" href="./css/visualizar.css">
</head>
<body>

    <?php require_once("./_menu.php") ?>

    <div class="conteudo">


        <h1 class="titulo">Links Salvos</h1>

        <?php
            require_once("./visualizarbd.php");
            if($totalRegistros > 0) {
        ?>

        <div class="card-container">
            <?php foreach($dados as $linha) { ?>
            <div class="card">
                <div class="card-image">
                    <img src="./upload/<?= $linha['foto'];?> "alt="Imagem do Link">
                </div>
                <div class="card-content">
                    <h2><?= $linha['link']?></h2>
                    <p>Categoria: <?= $linha['categoriaURL']?></p>
                    <p><?= $linha['descricaoURL']?></p>
                    <p>Salvo em: <?php 
                        $data_original = $linha['dataCadastroURL'];

                        $data = DateTime::createFromFormat('Y-m-d', $data_original);
                        $data_formatada = $data->format('d/m/Y');
                        echo $data_formatada;
                        
                    ?></p>
                    <div class=></div>
                    <a href="<?= $linha['link']; ?>" class="btnAcessar">Acessar</a>
                    <a href="./excluir.php?id=<?= $linha['idURL'];?>" class="btnExcluir">Excluir</a>
                    <a href="./atualizar.php?id=<?= $linha['idURL'];?>" class="btnAtualizar">Atualizar</a>
                </div>
            </div>
            <?php } ?>
        </div>

        <?php
            } else {
                echo("<p> Não há dados disponíveis. </p>");
            }
        ?>
    </div>
</body>
</html>
