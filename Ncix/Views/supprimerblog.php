<?php
    include 'C:\xampp\htdocs\Ncix\Controller\blogC.php';
    $blogC=new blogC();
    $blogC->supprimerblog($_GET["id"]);
    header('Location:/Ncix/Views/afficherblog.php');
?>