<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="4; url=./visualizar.php">
    <link rel="stylesheet" href="./css/salvar.css">
    <style>

        .conteudo-redirect{
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .link{
            width: auto;
            height: 300px;
            margin: 10px 0 0 0;
            animation: fadeIn 3s;
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

    </style>
    <title>Salvador de Links</title>
</head>
<body>
    <div class="conteudo-redirect">

    <h1>SALVADOR DE LINKS...</h1>
    <img src="./img/link.png" alt="Link" class="link">

    </div>
</body>
</html>