<?php session_start();
?>

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
                        <a href="impression.php" class="nav-link smoothScroll">Impressions grand format</a>
                    </li>

                    <li class="nav-item">
                        <a href="etiquettes.php" class="nav-link smoothScroll">Étiquettes</a>
                    </li>

                    <li class="nav-item">
                        <a href="pose.php" class="nav-link smoothScroll">Service de pose</a>
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


<!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">
                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="200">La solution globale à vos impressions</h1>

                                    <a href="paprec/products.php" class="btn custom-btn mt-3" data-aos="fade-up" data-aos-delay="300">Clients</a>

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="400">en savoir plus</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>

     <!-- CLASS -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="row">

                            <div class="col-lg-12 col-12 text-center mb-5">
                                <h6 data-aos="fade-up">Vous voulez en</h6>

                                <h2 data-aos="fade-up" data-aos-delay="100">apprendre plus sur nous?</h2>
                             </div>

                            <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                                <div class="class-thumb">
                                    <img src="images/class/acuity.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Découvrez</h3>

                                        <span>nos impressions <strong>grand format</strong> </span>

                                        <p class="mt-3">Bâches, panneaux, magnets, adhésifs, etc...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 mt-md-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                                <div class="class-thumb">
                                    <img src="images/class/etiquettes.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Découvrez</h3>

                                        <span>nos impressions <strong>d'étiquettes</strong></span>

                                        <p class="mt-3">Plusieurs applications comme le luxe, l'électronique ou la publicité.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-5 mt-lg-0 col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="class-thumb">
                                    <img src="images/class/poses.jpg" class="img-fluid" alt="Class">

                                    <div class="class-info">
                                        <h3 class="mb-1">Découvrez</h3>

                                        <span>nos services de <strong>pose d'adhésifs</strong></span>

                                        <p class="mt-3">Véhicules, bornes, <br>murs, sol.</p>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>

     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="200">À PROPOS</h2>

                                <p data-aos="fade-up" data-aos-delay="300">Adhéprint n'a cessé <a rel="nofollow" target="_parent">depuis 1985</a> de développer ses compétences techniques et spécifiques ainsi que celles de l'identification industrielle.
                                
                            </p>

                                <p data-aos="fade-up" data-aos-delay="400">Nous sommes les spécialistes de l'univers de l'environnement reconnu grâce à <a rel="nofollow" target="_parent">notre parc machine unique</a> dans la fabrication de vos adhésifs et de vos panneaux.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
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

<section class="about2 section">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="200">ÉCO-responsable</h2>

                                <p data-aos="fade-up" data-aos-delay="300">Adhéprint offre une gamme d'adhésifs et de panneaux qui s'engage au quotidien aux côtés des acteurs de l'environnement.
                                
                            </p>

                                <p data-aos="fade-up" data-aos-delay="400">Aujourd'hui nous possédons l'unique outil répondant aux nouvelles normes environnementales pouvant s'inscrire dans une démarche éco-citoyenne respectueuse de l'environnement</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="team-thumb">
                                    <img src="images/team/imp1.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Impression</h3>
                                        <span>sur Acuity F</span>

                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="team-thumb">
                                    <img src="images/team/imp2.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Panneau</h3>
                                        <span>avec vernis</span>

                                    </div>
                                </div>
                            </div>

                    </div>
                    
               </div>
     </section>


   
     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Nos horaires</h2>

                        <p data-aos="fade-up" data-aos-delay="400"><i class="planning"></i> LUNDI : 8:30 - 18:00</br> MARDI : 8:30 - 18:00</br> MERCREDI : 8:30 - 18:00</br>
                        JEUDI : 8:30 - 18:00 </br> VENDREDI : 8:30 - 17:00
                        </p>

                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="100">Nous contacter</h2>

                        <p data-aos="fade-up" data-aos-delay="400"><i class="mail"></i> Téléphone : 01 60 35 11 24</br> E-mail : adheprint@adheprint.fr
                        </p>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Comment <span>nous trouver ?</span></h2>

                        <p data-aos="fade-up" data-aos-delay="400"><i class="fa fa-map-marker mr-1"></i> 17 rue de Lamirault, ZAC de lamirault 77090 COLLEGIEN</p>

                        <div class="google-map" data-aos="fade-up" data-aos-delay="700">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5253.620243918261!2d2.6755359278064033!3d48.82368421713613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e61acfedaaeebf%3A0xf584259246b54d04!2sAdheprint!5e0!3m2!1sfr!2sfr!4v1643220668741!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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



     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>