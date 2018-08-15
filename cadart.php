<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <?php include "head.php" ?>
        <title>Área do Admin</title>
    </head>
    <body>

        <?php include "headeramin.php" ?>
        
        <?php
        if (isset($_POST['bcad'])) {
            if (isset($_FILES['foto']['name']) && $_FILES['foto']['error'] == 0) {

                $arquivo_tmp = $_FILES['foto']['tmp_name'];
                $nome = $_FILES['foto']['name'];

                // Pega a extensão
                $extensao = pathinfo($nome, PATHINFO_EXTENSION);

                // Converte a extensão para minúsculo
                $extensao = strtolower($extensao);

                // Somente imagens, .jpg;.jpeg;.png
                // Aqui eu enfileiro as extensões permitidas e separo por ';'
                // Isso serve apenas para eu poder pesquisar dentro desta String
                if (strstr('.jpg;.jpeg;.png', $extensao)) {
                    // Cria um nome único para esta imagem
                    // Evita que duplique as imagens no servidor.
                    // Evita nomes com acentos, espaços e caracteres não alfanuméricos
                    $novoNome = uniqid(time()) . '.' . $extensao;

                    // Concatena a pasta com o nome
                    $destino = 'img_art/' . $novoNome;

                    // tenta mover o arquivo para o destino
                    if (@move_uploaded_file($arquivo_tmp, $destino)) {

                        require_once 'conexao.php';

                        $fot = $novoNome;
                        $cat = $_POST['categoria'];
                        $tit = $_POST['titulo'];
                        $res = $_POST['resumo'];
                        $dat = date('Y-m-d', strtotime($_POST['data'])) . " " . $_POST['temp'] . ":00";
                        $aut = $_POST['autor'];
                        $con = $_POST['conteudo'];

                        $ins = "INSERT INTO `artigo`(`foto`, `categoria`, `titulo`, `resumo`, `data`, `autor`, `conteudo`) VALUES ('$fot', '$cat', '$tit', '$res', '$dat', '$aut', '$con')";

                        $insv = mysqli_query($conn, $ins);

                        if ($insv) {
                            echo "<script>alert('Sucesso ao cadastrar!!!')</script>";
                        } else {
                            echo "<script>alert('Erro ao cadastrar!!!')</script>";
                        }
                    } else
                        echo 'Erro ao salvar o arquivo. Aparentemente você não tem permissão de escrita.<br />';
                } else
                    echo 'Você poderá enviar apenas arquivos "*.jpg;*.jpeg;*.png"<br />';
            } else
                echo 'Selecione uma foto!';
        }
        ?>

        <form style="margin-top: 20px;" class="form-group container" enctype="multipart/form-data" action="#" method="post">
            <h2>Cadastro de Artigos</h2>
            <label class="h4 card-title" for="foto">Selecione a imagem:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <input style="width: 400px" class="form-control" type="file" id="foto" required name="foto" ><br>
            <label class="h4 card-title" for="categoria">Categoria:</label>
            <input style="width: 350px" class="form-control" type="text" required id="categoria" name="categoria" maxlength="30" placeholder="categoria"/><br>
            <label class="h4 card-title" for="titulo">Título:</label>
            <input style="width: 350px" class="form-control" type="text" required id="titulo" name="titulo" maxlength="30" placeholder="titulo"/><br>
            <label class="h4 card-title" for="data">Data de publicação:</label>
            <input style="width: 150px;" class="form-control" type="date" required id="data" name="data">
            <label style="margin-top: 20px;" class="h4 card-title" for="hora">Hora:</label>
            <input style="width: 150px;" class="form-control" required id="hora" type="time" name="temp"><br>
            <label class="h4 card-title" for="resumo">Resumo:</label><br>
            <textarea class="md-textarea form-control" maxlength="200" required id="resumo" name="resumo" placeholder="resumo"></textarea><br>
            <label class="h4 card-title" for="autor">Autor:</label>
            <input style="width: 350px" class="form-control" type="text" required id="autor" name="autor" placeholder="autor" maxlength="50"/><br>
            <label class="h4 card-title" for="conteudo">Conteúdo:</label><br>
            <textarea class="md-textarea form-control" required id="conteudo" name="conteudo" placeholder="conteudo"></textarea><br>

            <input class="btn btn-info" type="submit" name="bcad" value="Cadastrar"/>
        </form> 
    </body>
</html>


<?php ?>