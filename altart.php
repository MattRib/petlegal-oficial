<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Área do Admin</title>
    </head>
    <body>
        <?php
        if (isset($_GET['b'])){
        
        $id = $_GET['b'];    
            
        require_once 'conexao.php';
        
        $sel = "SELECT * FROM artigo WHERE id_artigo = '$id'";
        
        $selv = mysqli_query($conn, $sel);
        }
        //else {header("location:cadart.php");}
        
        if (isset($_POST['bcad'])) {
            
            require_once 'conexao.php';

            $cat = $_POST['categoria'];
            $tit = $_POST['titulo'];
            $res = $_POST['resumo'];
            $dat = date('Y-m-d', strtotime($_POST['data'])) . " " . $_POST['temp'] . ":00";
            $aut = $_POST['autor'];
            $con = $_POST['conteudo'];
            $sta = $_POST['status'];

            $alt = "UPDATE `artigo` SET `categoria`='$cat',`titulo`='$tit',`resumo`='$res',`data`='$dat',`autor`='$aut',`conteudo`='$con',`status`='$sta' WHERE id_artigo='$id'";
            $insv = mysqli_query($conn, $alt);

            if ($insv) {
                header("location:listart.php");
                echo "<script>alert('Sucesso ao cadastrar!!!')</script>";
                
            } else {
                echo "<script>alert('Erro ao cadastrar!!!')</script>";
            }
        }
        
        ?>
        
        <form action="#" method="post">
            
            <?php while ($row = mysqli_fetch_assoc($selv)) { ?>
            
            <label for="categoria">Categoria:</label>
            <input type="text" id="categoria" name="categoria" maxlength="30" placeholder="categoria" value="<?=$row['categoria']?>"><br>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" maxlength="30" placeholder="titulo" value="<?=$row['titulo']?>" ><br>
            <label for="data">Data de publicação:</label>
            <input type="date" id="data" name="data">
            <input type="time" name="temp"><br>
            <label for="resumo">Resumo:</label><br>
            <textarea maxlength="200" id="resumo" name="resumo" placeholder="resumo"><?=$row['resumo']?></textarea><br>
            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" placeholder="autor" maxlength="50" value="<?=$row['autor']?>" ><br>
            <label for="conteudo">Conteúdo:</label><br>
            <textarea id="conteudo" name="conteudo" placeholder="conteudo"><?=$row['conteudo']?></textarea><br>
            <?php } ?>
            <label for="status">Status:</label>
            <select name="status">
                <option value="1" >Ativo</option>
                <option value="0" >Inativo</option>
            </select><br>
            
            <input type="submit" name="bcad" value="Alterar">
        </form> 
    </body>
</html>