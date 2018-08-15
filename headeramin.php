 <!-- Navigation -->
     <?php session_start() ?>
     <?php if(!isset($_SESSION['admin'])){ header("location:index.php"); } ?>
 
 <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="area.php"><strong>Pet Legal / Admin</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <h5 class="nav-link" >Bem vindo <?php echo $_SESSION['admin'];?></h5>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listart.php">Listagem Artigos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cadart.php">Cadastro de Artigo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>   