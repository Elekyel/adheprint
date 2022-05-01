<?php
session_start();

require_once "list.php";
require_once "inc/db.php";
//$products = getProducts();
//echo count($products);
//echo $products[0]['name'];

$name = trim($_GET['name']);

$connect = dbConnect();
$queryPrepared = $connect->prepare('SELECT * FROM products WHERE name LIKE ? ');
$queryPrepared->execute([
    $name . '%'
]);
$products = $queryPrepared->fetchALL(PDO::FETCH_ASSOC);
$active = isset($_GET['page'])?$_GET['page']:$_SESSION['page'];
if(sizeof($products)>0) {
    echo '<div class="container">

        <div class="row">';
    $start = 6 * ($active - 1);
    for ($i = $start; $i < $start + 6 && $i < count($products); $i++) {
        echo '<div class="col-md-4">
            <div class="product-item" id="' . "product_" . ($i + 1) . '">
              <a href="product-details.html"><img src="' . $products[$i]['image'] . '" alt=""></a>
              <div class="down-content">
                <a href="product-details.html"><h4>' . $products[$i]['name'] . '</h4></a>
                <h6 id="' . "price_" . ($i + 1) . '">' . $products[$i]['petit-prix'] . "€" . '</h6>
                <p>Chaque kit de benne paprec est composé de deux grandes façades ainsi que deux petits côtés.</p>
                <select id="' . "size_" . ($i + 1) . '" class="form-control" data-msg-required="Le champ est requis.">
                    <option selected value="Petit">Petit kit (2460x600)</option>
                    <option value="Grand">Grand kit (2460x1100)</option>
                </select><br>

                <label for="quantite">Quantité:</label>
                <input type="number" id="' . "quantity_" . ($i + 1) . '" name="quantite" min="1" max="100" value="1">

                <button type="submit" onclick="addToCart(\'' . $products[$i]['name'] . '\',\'' . "price_" . ($i + 1) . '\',\'' . "quantity_" . ($i + 1) . '\',\'' . "size_" . ($i + 1) . '\')" class="Command-button">Ajouter à la commande</button>

              </div>
            </div>
          </div>';
    }
    if (count($products) > 6) {
        echo '<div class="col-md-12">
          <ul class="pages">';
        $reste = count($products);
        $page = 1;
        while ($reste > 0) {
            echo '<li ';
            if ($page == $active) {
                echo 'class="active"';
            }
            //echo '><a href="products.php?name=' . $_GET['name'] . '&page=' . $page . '">' . $page++ . '</a></li>';
            echo '><a href="#productContainer" onclick="searchProduct(\'\','.$page.')">'.$page++.'</a></li>';
            $reste -= 6;
        }
        echo '<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>';
    }
    echo '</div>
      </div>';
}else{
    echo '<div class="container"><div class="row" style="justify-content: center;text-align: center"><div class="col-md-6">Aucun résultat disponible</div></div></div>';
}