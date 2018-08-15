<?php

if(isset($_POST['benviar'])){
    
    require_once 'conexao.php';
    
    $nome  = $_POST['nome_contato'];
    $email = $_POST['email_contato'];
    $ass   = $_POST['ass_contato'];
    $text  = $_POST['text_contato'];
    
    $sql = "INSERT INTO `contato`(`nome_contato`, `email_contato`, `ass_contato`, `text_contato`) VALUES ('$nome', '$email', '$ass', '$text')";
    
    $val = mysqli_query($conn, $sql);
    
    if($val){
        echo "<script>alert('Mensagem enviada!!!')</script>"; 
        header("location:cadastrofoi.php");        
    }else{
        echo "<script>alert('Erro ao enviar a mensagem!!!')</script>"; 
        header("location:errocadastro.php");
        
    }
        
        
}



?>