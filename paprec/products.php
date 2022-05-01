<?php 
session_start();

require_once "../list.php";
$products = getProducts();
//echo count($products);
//echo $products[0]['name'];
$_SESSION['page']=isset($_GET['page'])?$_GET['page']:1;
$active = isset($_SESSION['page'])?$_SESSION['page']:1;
$search = $_GET['name'];
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Boutique Paprec</title>

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
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="../index.php"><h2>Adhé<em>print</em></h2></a>
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

                <li class="nav-item active"><a class="nav-link" href="products.php">Produits</a>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.php">Panier <button id="cart" class="heisenberg">0</button></a>
                  
                </li>

                <li class="nav-item"><a class="nav-link" href="contact.php #contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/paprec-heading.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Bienvenue sur</h4>
              <h2>la boutique Paprec</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="test">
      <button class="Cat1">Kits Bennes</button>
      <button class="Cat1">Kits Cabines</button>
      <button class="Cat1">Kits Schrolls</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <!-- Search form -->
    <div class="row" style="justify-content: center">
        <div class="col-md-6 md-form mt-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="searchBar" value="<?php echo $_GET['name'] ?>">
        </div>
    </div>
    <div class="products" style="margin-top: 30px" id="productContainer">
      <div class="container">

        <div class="row">
        <?php
        $start = 6*($active-1);
        for ($i=$start; $i < $start+6&&$i<count($products); $i++) {
          ?>
          <div class="col-md-4">
            <div class="product-item" id="<?php echo "product_".($i+1) ?>">
              <a href="product-details.html"><img src="<?php echo $products[$i]['image'] ?>" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4><?php echo $products[$i]['name'] ?></h4></a>
                <h6 id="<?php echo "price_".($i+1) ?>"><?php echo $products[$i]['petit-prix']."€" ?></h6>
                <p>Chaque kit de benne paprec est composé de deux grandes façades ainsi que deux petits côtés.</p>
                <select id="<?php echo "size_".($i+1) ?>" class="form-control" data-msg-required="Le champ est requis.">
                    <option selected value="Petit">Petit kit (2460x600)</option>
                    <option value="Grand">Grand kit (2460x1100)</option>
                </select><br>

                <select id="<?php echo "quantity_".($i+1) ?>" class="form-control" data-msg-required="Le champ est requis.">
                    <option selected value="0">0</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                </select><br>

               <!-- <label for="quantite">Quantité:</label>
                <input type="number" id="<?php echo "quantity_".($i+1) ?>" name="quantite" min="1" max="100" value="1"> -->

                <button type="submit" onclick="addToCart('<?php echo $products[$i]['name']; ?>','<?php echo "price_".($i+1); ?>','<?php echo "quantity_".($i+1); ?>','<?php echo "size_".($i+1); ?>')" class="Command-button">Ajouter à la commande</button>

              </div>
            </div>
          </div>
          <?php
        }
        ?>

          <?php
          if (count($products)>6) {
          ?>
          <div class="col-md-12">
          <ul class="pages">
          <?php
          $reste = count($products);
          $page = 1;
          while ($reste>0) {
            ?>
            <li <?php if($page==$active){?>class="active"<?php } ?>><a href="products.php?page=<?php echo $page ?>"><?php echo $page++ ?></a></li>
            <?php
            $reste-=6;
          }
          ?>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>

          </div>

          <?php
          }
          ?>
        </div>
      </div>

    </div>
        <div class="test">
      <button class="Cat1" href="checkout.php">Allez au panier</button>

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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Supprimer</button>
            <button type="button" class="btn btn-primary">Acheter</button>
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
    <script src="../js/product.js"></script>
  </body>

</html>
