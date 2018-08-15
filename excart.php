<?php

if(isset($_GET['b'])){
    
    $id = $_GET['b'];
    
    require_once 'conexao.php';
    
    $sqlexc = "UPDATE `artigo` SET `status`= '0' WHERE id_artigo = '$id'";
    
    $vexc = mysqli_query($conn, $sqlexc);
    
    if($vexc)
        header("location:listart.php");
    else{
        echo "<script>alert('Erro ao excluir!!!');</script>";
        header("location:listart.php");
    }
    
}













?>