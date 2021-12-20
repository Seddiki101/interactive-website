<?php
include 'B:\apps\xampp\htdocs\ncix\M\commande.php';
include 'B:\apps\xampp\htdocs\ncix\C\comm.php';


if (isset($_GET["id"]))
{

    $commandeC=new commandeC();
   
    $commandeC->afficherCommande($_GET["id"]);
 

    header('Location: affichercommande.php');
}

?>