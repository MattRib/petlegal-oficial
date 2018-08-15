<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include "head.php"; ?>
        <title>Área do Admin</title>
    </head>
    
    <body>
        <header>
           <?php include "headeramin.php"; ?>
        </header>
    <?php

        
        require_once 'conexao.php';
        
        $selart = "SELECT * FROM artigo ORDER BY data DESC";

        $valids = mysqli_query($conn, $selart);
        ?>
        <div class="container">
            </br><h1>Lista de Artigos</h1></br>
        <table class="table table-striped table-responsive-md btn-table text-center">        
            <tr>
                <th>Categoria</th>
                <th>Título</th>
                <th>Data e Hora de publicação</th>
                <th>Status</th>
                <th colspan="2">Destino</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($valids)) { ?>
                <tr>
                    <td><?=$row['categoria']?></td>
                    <td><?=$row['titulo']?></td>
                    <td><?=date("d/m/Y H:i:s", strtotime($row['data']))?></td>
                    <?php if($row['status'] == 1){  ?>
                    <td>Ativo</td><?php }else if($row['status'] == 0){?>
                    <td>Inativo</td><?php } ?>
                    <td><a href="altart.php?b=<?=$row['id_artigo']?>">Alterar</a></td>
                    <td><a href="excart.php?b=<?=$row['id_artigo']?>">Desativar</a></td>
                </tr>
            <?php } ?>
        </table>
        </div>
    </body>
</html>