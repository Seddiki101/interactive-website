<?php
 include_once '../../C/livraisonC.php';
 $co = new livraisonC();
 if(isset($_GET['id'])){
     $co->supprimerLivraison($_GET['id']);
 
    header('Location:gestionlivraison.php');
    }

 ?>