<?php
require_once "../Controller/sujetc.php";
require_once "../Model/sujet.php";



if(isset($_GET["id"]))
{   
    $id=$_GET["id"];
    $sujetc = new sujetc();
    $sujetc->supprimersujet($id);
    header("Location: ../Views/Affichersujetback.php");
    exit();
}
    





?>