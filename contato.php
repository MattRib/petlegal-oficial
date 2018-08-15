<!DOCTYPE html>
<html lang="pt-br">

    <head>
       <?php include "head.php"; ?>
    </head>

    <body>
        <header>
        <?php include "header.php"; ?>
        </header>

        <!-- Section: Contact v.2 -->
        <section class="my-5 container">
            <!-- Section heading -->
            <h2 class="h1-responsive font-weight-bold text-center my-5">Mande Uma Mensagem Pra Gente!</h2>
            <!-- Section description -->
            <p class="text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse
                quasi, veritatis totam voluptas nostrum quisquam eum porro a pariatur veniam.</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-9 mb-md-0 mb-5">


                    <form action="cont.php" method="post">

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" autofocus placeholder="Seu Nome" name="nome_contato" required id="contact-name" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="email" placeholder="Seu email" name="email_contato" required id="contact-email" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" placeholder="Assunto" name="ass_contato" required id="contact-Subject" class="form-control">
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Grid column -->
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea id="contact-message" class="form-control md-textarea" required name="text_contato" maxlength="360" placeholder="" rows="3"></textarea>
                                    <label for="contact-message">Sua Mensagem</label>
                                </div>
                            </div>
                            <!-- Grid column -->

                        </div>
                        <!-- Grid row -->
                        <div class="text-center text-md-left">
                            <input class="btn btn-success btn-md" type="submit" name="benviar" value="Enviar">
                        </div>
                    </form>


                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 text-center" style="margin-top: 60px;">
                    <ul class="list-unstyled mb-0">
                        <li>
                            <i class="fa fa-phone fa-2x mt-4 blue-text animated tada"></i>
                            <p>(21)99606-8504</p>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-2x mt-4 blue-text animated tada"></i>
                            <p class="mb-0">petlegal_email@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->
        </section>
        <!-- Section: Contact v.2 -->

        <!-- Footer -->
        <footer>
            <?php include "footer.php"; ?>
        </footer>
        <!-- Footer -->



        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>

</html>