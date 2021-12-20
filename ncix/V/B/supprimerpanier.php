<?php
include 'B:\apps\xampp\htdocs\ncix\M\panier.php';
include 'B:\apps\xampp\htdocs\ncix\C\pan.php';


if (isset($_GET["id"]))
{

    $panierC=new panierC();
   
    $panierC->supprimerPanier($_GET["id"]);
 

    header('Location: afficherpanier.php');
}

?>