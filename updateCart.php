<?php
session_start();
$i=0;
$in=-1;
foreach ($_SESSION['cart'] as $elm){
    if($elm[0]==$_GET['name'])$in=$i;
    $i++;
}
if($in>=0)$_SESSION['cart'][$in][2]=$_GET['value'];
?>