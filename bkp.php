<?php
    require_once("./_menu.php");
?>


<table>
            <thead>
                <th width="35px">ID</th>
                <th width="80px">FOTO</th>
                <th width="200px">LINK</th>
                <th width="300px">DESCRIÇÃO</th>
                <TH width="200px">CATEGORIA</TH>
                <th width="50px">ATUALIZAR</th>
                <th width="50px">EXCLUIR</th>
                <th width="100px">SALVO EM</th>
            </thead>
            <tbody>
                <?php
                    require_once("./visualizarbd.php");
                    if($totalRegistros > 0) {

                        foreach($dados as $linha) {
                ?>
                <tr>
                    <td align="center"><?= $linha["idURL"];?></td>
                    <td align="center"><img src="./upload/<?= $linha['foto'];?>" width="50px", height="30px" ></td>
                    <td><?= $linha["link"]?></td>
                    <td><?= $linha["descricaoURL"]?></td>
                    <td><?= $linha["categoriaURL"]?></td>

                    <td align="center">
                        <a href="./atualizar.php?id=<?= $linha['idURL'];?>">
                            <img src="./img/atualizar.png" alt="btnAtualizar">
                        </a>
                    </td>

                    <td align="center">
                        <a href="./excluir.php?id=<?= $linha['idURL'];?>">
                            <img src="./img/excluir.png" alt="btnExcluir">
                        </a>
                    </td>

                    <td align="center">
                    <?php 
                        $data_original = $linha['dataCadastroURL'];

                        $data = DateTime::createFromFormat('Y-m-d', $data_original);
                        $data_formatada = $data->format('d/m/Y');
                        echo $data_formatada;
                        
                    ?>
                    </td>
                </tr>

                <?php
                        }
                    }else{
                        echo("<tr><td colspan=8> Não há dados </td><tr>") ;
                    }
                ?>
            </tbody>
        </table>