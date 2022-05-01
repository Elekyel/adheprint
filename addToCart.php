<?php
session_start();
$name = $_GET['size']." ".$_GET['name'];
$price = $_GET['price'];
$price = explode("€",$price);
$price = $price[0];
$quantity = $_GET['quantity'];
$product[] = $name;
$product[] = $price;
$product[] = $quantity;
$in = -1;
$i = 0;
$somme = 0;
foreach ($_SESSION['cart'] as $elm){
    if($elm[0]==$name)$in = $i;
    $i++;
}
$_SESSION['cart'][$i];
if($in==-1)$_SESSION['cart'][] = $product;
else $_SESSION['cart'][$in][2]=(int)$quantity+(int)$_SESSION['cart'][$in][2];
foreach ($_SESSION['cart'] as $elm){
    $somme+=(int)$elm[2];
}
echo $somme;
//print_r($_SESSION['cart']);
?>