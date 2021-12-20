<?php
 include_once '../../C/livreurC.php';
 $co = new livreurC();
 if(isset($_GET['id'])){
     $co->supprimerLivreur($_GET['id']);
 
    header('Location:gestionlivreur.php');
    }

 ?>