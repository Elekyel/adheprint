<?php
session_start();
$name = $_GET['name'];
$i=0;
$in= -1;
foreach ($_SESSION['cart'] as $elm){
    if($elm[0]==$name)$in=$i;
    $i++;
}
if($in>=0)$_SESSION['cart'][$in][2]=0;
//print_r($_SESSION['cart']);
?>