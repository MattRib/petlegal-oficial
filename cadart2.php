<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Área do Admin</title>
    </head>
    <body>
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

        <form enctype="multipart/form-data" action="#" method="post">
            <label for="foto">Selecione a imagem:</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="100000000">
            <input type="file" id="foto" name="foto" ><br>
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" maxlength="30" placeholder="categoria"/><br>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" maxlength="30" placeholder="titulo"/><br>
            <label for="data">Data de publicação:</label>
            <input type="date" id="data" name="data">
            <label for="hora">Hora:</label>
            <input type="time" id="hora" name="temp"><br>
            <label for="resumo">Resumo:</label><br>
            <textarea maxlength="200" id="resumo" name="resumo" placeholder="resumo"></textarea><br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" placeholder="autor" maxlength="50"/><br>
            <label for="conteudo">Conteúdo:</label><br>
            <textarea id="conteudo" name="conteudo" placeholder="conteudo"></textarea><br>

            <input type="submit" name="bcad" value="Cadastrar"/>
        </form> 
    </body>
</html>


<?php ?>