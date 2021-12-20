<?php
    include 'B:\apps\xampp\htdocs\ncix\C\blogC.php';
    $blogC=new blogC();
    $blogC->supprimerblog($_GET["id"]);
    header('Location:/Ncix/Views/afficherblog.php');
?>