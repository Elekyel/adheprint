<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

     <title>Adhéprint</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/app.css">

</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">
    <?php
    if (isset($_SESSION['username']))
    {
        ?>
    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.php">Adhéprint</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Accueil</a>
                    </li>

                    <li class="nav-item">
                        <a href="#grandformat.html" class="nav-link smoothScroll">Impressions grand format</a>
                    </li>

                    <li class="nav-item">
                        <a href="etiquettes.html" class="nav-link smoothScroll">Étiquettes</a>
                    </li>

                    <li class="nav-item">
                        <a href="pose.html" class="nav-link smoothScroll">Service de pose</a>
                    </li>


                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">À propos</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">À PROPOS</h2>

                                <p data-aos="fade-up" data-aos-delay="400">Adhéprint n'a cessé <a rel="nofollow" target="_parent">depuis 1985</a> de développer ses compétences techniques et spécifiques ainsi que celles de l'identification industrielle.
                                
                            </p>

                                <p data-aos="fade-up" data-aos-delay="500">Nous sommes les spécialistes de l'univers de l'environnement reconnu grâce à <a rel="nofollow" target="_parent">notre parc machine unique</a> dans la fabrication de vos adhésifs et de vos panneaux.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Présentation</h3>
                                        <span>de nos locaux</span>

                                    </div>
                                </div>
                            </div>
                    </div>

               </div>
     </section>

     <!-- FOOTER -->

     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-7 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2022 Adhéprint.
                    </div>
               </div>
          </div>
     </footer>

        
        <?php
    }
    else
    {
        header ("location:connect.php");
    }

    ?>




     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>