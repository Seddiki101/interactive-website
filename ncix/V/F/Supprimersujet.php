<?php
require_once "B:\apps\xampp\htdocs\ncix\C\sujetc.php";
require_once "B:\apps\xampp\htdocs\ncix\M\sujet.php";



if(isset($_GET["id"]))
{   
    $id=$_GET["id"];
    $sujetc = new sujetc();
    $sujetc->supprimersujet($id);
    header("Location: ../Views/Affichersujetback.php");
    exit();
}
    





?>