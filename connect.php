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


<section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">
                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">                            	

                                    <div class="center">
                                        <h1>Bonjour !</h1>
                                        <form method="post" action="login.php">
                                            <div class="txt_field">
                                                <input type="text" name="username" required>
                                                <span></span>
                                                <label>Société</label>
                                            </div>
                                            <div class="txt_field">
                                                <input type="password" name="password" required>
                                                <span></span>
                                                <label>Mot de passe</label>
                                            </div>
                                            <input type="submit" value="connexion" name="submit">
            
                                        </form>

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



     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>