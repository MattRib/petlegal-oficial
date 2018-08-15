<!DOCTYPE HTML>
<html>

    <?php include 'head.php'; ?>

    <body>
        <?php include 'header.php'; ?>

        <!-- Section: Blog v.3 -->
        <section class="my-5 container">

            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Posts Recentes</h2>
            <!-- Section description -->
            <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <?php
            require_once 'conexao.php';

            $w = "SELECT * FROM `artigo` WHERE data <= NOW() AND status = '1' ORDER BY data DESC";
            $vw = mysqli_query($conn, $w);
            
            while ($vwr = mysqli_fetch_assoc($vw)) {?>
            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-lg-5 col-xl-4">

                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
                        <img class="img-fluid" src="img_art/<?php echo $vwr['foto'];?>" alt="Imagem não disponível">
                        <a>
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-7 col-xl-8">
                    <!-- Category -->
                    <a href="#!" class="cyan-text"><h6 class="font-weight-bold mb-3"><i class="fa fa-map pr-2"></i><?php echo $vwr['categoria'];?></h6></a>
                    <!-- Post title -->
                    <h3 class="font-weight-bold mb-3"><strong><?php echo $vwr['titulo'];?></strong></h3>
                    <!-- Excerpt -->
                    <p class="dark-grey-text"><?php echo $vwr['resumo'];?></p>
                    <!-- Post data -->
                    <p>Escrito por <a class="font-weight-bold"><?php echo $vwr['autor'];?></a>, <?php echo date("d/m/Y", strtotime($vwr['data'])); ?></p>
                    <!-- Read more button -->
                    <a class="btn btn-cyan btn-md" href="pageart2.php?content=<?=$vwr['id_artigo'];?>">Ler Mais</a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <hr class="my-5">
            <?php } ?>
                <!-- Grid column -->

            <!-- Grid row -->

        </section>
        <!-- Section: Blog v.3 -->






<?php include 'footer.php'; ?> 
    </body>


</html>