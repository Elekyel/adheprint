<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Panier</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
     <?php
    if (isset($_SESSION['username']))
    {
        ?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href=".//index.php"><h2>Adhé<em>print</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Accueil
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.php">Produits</a></li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.php">Panier <button id="cart" style="visibility: hidden" class="heisenberg">0</button></a>
                  
                </li>

                <li class="nav-item"><a class="nav-link" href="../index.php #contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Vous voici sur le</h4>
              <h2>Panier</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products call-to-action">
      <div class="container">
        <ul class="list-group list-group-flush">
            <?php
            foreach ($_SESSION['cart'] as $elm){
                if($elm[2]>0){
            ?>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-6">
                            <button class="delete" onclick="removeFromCart('<?php echo $elm[0] ?>')">x</button>
                            <em><strong><?php echo $elm[0] ?></strong></em>
                        </div>
                        <div class="col-6 text-right">
                            <label for="quantite">Quantité:</label>
                            <input class="item-in-cart" type="number" unitPrice="<?php echo $elm[1] ?>" id="quantite" name="quantite" min="0" max="100" value="<?php echo $elm[2] ?>">
                            <strong>380€</strong>
                        </div>
                    </div>
                </li>
            <?php
                }
            }
            ?>
          <!--
          <li class="list-group-item">
            <div class="row">
                  <div class="col-6">
                    <button class="delete">x</button>                    
                    <em>Kit cabine FH</strong></em>                    
                  </div>
                  <div class="col-6 text-right">                    
                    <label for="quantite">Quantité:</label>
                    <input type="number" id="quantite" name="quantite" min="0" max="100" value="7">
                    <strong>380€</strong>
                  </div>
             </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <button class="delete">x</button>
                         <em>Kit benne ARDOISE</em>
                    </div>
                    <div class="col-6 text-right">
                         <label for="quantite">Quantité:</label>
                         <input type="number" id="quantite" name="quantite" min="0" max="100" value="10">
                         <strong>679€</strong>
                    </div>
               </div>
          </li>
            -->
          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         
                    </div>

                    <div class="col-6 text-right">
                         
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-6">
                         <em>Total</em>
                    </div>

                    <div class="col-6 text-right">
                         <strong id="totalPrice">1059€</strong>
                    </div>
               </div>
          </li>
        </ul>

        <br>
        
        <div class="inner-content">
          <div class="contact-form">
              <form action="../newPDF.php" method="get">
                  <div class="row">
                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Adresse de livraison:</label>
                              <input type="text" class="form-control" name="livraison">
                          </div>
                      </div>

                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Adresse de facturation:</label>
                              <input type="text" class="form-control" name="facturation">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Nom:</label>
                              <input type="text" class="form-control" name="lastname">
                          </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Prénom:</label>
                              <input type="text" class="form-control" name="firstname">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Adresse mail:</label>
                              <input type="email" class="form-control" name="mail">
                          </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Téléphone:</label>
                              <input type="text" class="form-control" name="tel">
                          </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                          <div class="form-group">
                              <label class="control-label">Votre N° de commande</label>
                              <input type="text" class="form-control" name="commande">
                          </div>
                      </div>

                      <div class="clearfix col-sm-6 col-xs-12">

                          <button type="submit" class="filled-button pull-right">Passer commande</button>
                      </div>
                  </div>
              </form>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2022 Adhéprint.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up location" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return location" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Return date/time" required="">
                          </fieldset>
                       </div>
                  </div>
                  <input type="text" class="form-control" placeholder="Enter full name" required="">

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter email address" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Enter phone" required="">
                          </fieldset>
                       </div>
                  </div>
              </form>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Book Now</button>
          </div>
        </div>
      </div>
    </div>

                <?php
    }
    else
    {
        header ("location:../connect.php");
    }

    ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
     <script src="../js/cart.js"></script>
  </body>

</html>
