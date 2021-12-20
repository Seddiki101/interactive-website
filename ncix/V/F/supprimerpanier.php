<?php
include '..\..\M\panier.php';
include '..\..\C\pan.php';


if (isset($_GET["id"]))
{

    $panierC=new panierC();
   
    $panierC->supprimerPanier($_GET["id"]);
 

    header('Location: cart.php');
}

?>