<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php include"head.php"; session_start()?>
    </head>

    <body>
        <header>
            <?php include"header.php"; ?>
        </header>

        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4 animated fadeInDown">Adote Um Pet!</h1>
                <p class="lead animated fadeInUp">
                    Adotar é encher de esperanças um coração que antes não sabia o que era carinho, e receber em troca um presente único: O Amor Incondicional!
                </p>
                <a class="btn btn-pink btn-lg animated fadeInUp" style="border-radius: 40px;" data-wow-delay="0.4s" href="pageart.php" role="button">Saiba Mais</a>
            </div>
        </div>

        <!-- Section: Features v.1 -->
        <section class="text-center my-5 container">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold">3 motivos para você adotar</h2>
            <!-- Section description -->
            <p class="lead w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fa fa-heart fa-3x red-text animated pulse infinite" aria-hidden="true"></i>
                    <h5 class="font-weight-bold my-4">Amor</h5>
                    <p class="mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fa fa-star fa-3x cyan-text animated bounce infinite"></i>
                    <h5 class="font-weight-bold my-4">Um Amigo</h5>
                    <p class="mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4">

                    <i class="fa fa-hand-stop-o fa-3x orange-text animated  tada infinite"></i>
                    <h5 class="font-weight-bold my-4">Sem Abandonos</h5>
                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
                    </p>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
        </section>
        <!-- Section: Features v.1 -->

        <!-- Card -->
        <div class="card card-image" style="background-image: url(img/img3.jpg); background-attachment: fixed; background-size: cover;">

            <!-- Content -->
            <div class="rgba-black-strong py-5 px-4">
                <div class="row d-flex justify-content-center ">
                    <div class="col-md-10 col-xl-8">
                        <h2 class="card-content">O que eu preciso para adotar um Pet?</h2>
                        <p style="color: #fff; text-align: center;" class="my-5">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis debitis</p>

                    </div>
                    <!-- Accordion card -->
                </div>
                <!--/.Accordion wrapper-->

            </div>
        </div>
    </div>
    <!-- Content -->
</div>
<!-- Card -->

<!-- Section: Blog v.1 -->
<section class="my-5 container text-center">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5">Não perca nada!</h2>
    <!-- Section description -->
    <p class="text-center w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <hr class="my-5">

    <?php
    require_once 'conexao.php';
    
    $s = "SELECT * FROM `artigo` WHERE data <= NOW() AND status = '1' ORDER BY data DESC LIMIT 3";
    $va = mysqli_query($conn, $s);

    while ($r = mysqli_fetch_assoc($va)) {
        ?>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5">

                <!-- Featured image -->
                <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
                    <img class="img-fluid" src="img_art/<?= $r['foto']; ?>" alt="imagem não disponível">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!-- Category -->
                <a href="#!" class="indigo-text">
                    <h6 class="font-weight-bold mb-3">
                        <i class="fa fa-star pr-2"></i><?php echo $r['categoria'] ?></h6>
                </a>
                <!-- Post title -->
                <h3 class="font-weight-bold mb-3">
                    <strong><?= $r['titulo']; ?></strong>
                </h3>
                <!-- Excerpt -->
                <p><?= $r['resumo']; ?></p>
                <!-- Post data -->
                <p>por <a><strong><?= $r['autor']; ?></strong></a>, <?php echo date("d/m/Y", strtotime($r['data'])); ?></p>
                <!-- Read more button -->
                <a class="btn btn-primary btn-md" href="pageart2.php?content=<?=$r['id_artigo'];?>">Ler Mais</a>

            </div>
            <!-- Grid column -->

        </div>

        <!-- Grid row -->

        <hr class="my-5">
    <?php } ?>
    
    <!-- Grid row -->
    <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5">
            </section>
            <!-- Section: Blog v.1 -->

            <div class="container">
                <!-- Section: Blog v.2 -->
                <section class="text-center my-5">

                    <!-- Section heading -->
                    <h2 class="h1-responsive font-weight-bold my-5">Veja mais aqui!</h2>
                    <!-- Section description -->
                    <p class="dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                    <!-- Grid row -->
                    <div class="row">

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="img/img4.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Category -->
                            <a href="#!" class="pink-text">
                                <h6 class="font-weight-bold mb-3">
                                    <i class="fa fa-map pr-2"></i>Aventura</h6>
                            </a>
                            <!-- Post title -->
                            <h4 class="font-weight-bold mb-3">
                                <strong>Título</strong>
                            </h4>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus voluptas.</p>
                            <!-- Post data -->
                            <p>por <a><strong>Autor</strong></a>, dd/mm/aa</p>
                            <!-- Read more button -->
                            <a class="btn btn-secondary btn-rounded btn-md">Leia mais</a>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-6 mb-md-0 mb-4">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="img/img5.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Category -->
                            <a href="#!" class="deep-orange-text">
                                <h6 class="font-weight-bold mb-3">
                                    <i class="fa fa-graduation-cap pr-2"></i>Fofo!</h6>
                            </a>
                            <!-- Post title -->
                            <h4 class="font-weight-bold mb-3">
                                <strong>Title of the news</strong>
                            </h4>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis voluptatum deleniti atque corrupti quos dolores.</p>
                            <!-- Post data -->
                            <p>por <a><strong>Autor</strong></a>, dd/mm/aa</p>
                            <!-- Read more button -->
                            <a class="btn btn-deep-orange btn-rounded btn-md">Leia mais</a>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-lg-4 col-md-6 mb-0">

                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <img class="img-fluid" src="img/img6.jpg" alt="Sample image">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                            </div>

                            <!-- Category -->
                            <a href="#!" class="blue-text">
                                <h6 class="font-weight-bold mb-3">
                                    <i class="fa fa-fire pr-2"></i>Culture</h6>
                            </a>
                            <!-- Post title -->
                            <h4 class="font-weight-bold mb-3">
                                <strong>Title of the news</strong>
                            </h4>
                            <!-- Excerpt -->
                            <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                            <!-- Post data -->
                            <p>por <a><strong>Autor</strong></a>, dd/mm/aa</p>
                            <!-- Read more button -->
                            <a class="btn btn-info btn-rounded btn-md">Leia mais</a>

                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid row -->

                </section>
                <!-- Section: Blog v.2 -->
            </div>

            <!-- Footer -->
            <footer>

                <?php include"footer.php"; ?>

            </footer>
            <!-- Footer -->

            <!-- SCRIPTS -->
            <!-- JQuery -->
            <script src="js/jquery-3.1.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script src="js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script src="js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script src="js/mdb.min.js"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
            </body>

            </html>