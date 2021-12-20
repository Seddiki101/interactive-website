<?php
require_once 'B:\apps\xampp\htdocs\ncix\C\sujetC.php';
require_once 'B:\apps\xampp\htdocs\ncix\C\blogC.php';


$blogc = new blogC();
$idc = $_GET["id"] ;
$result = $blogc->recjoin($idc);

$blogc=new blogC();


$listeblog=$blogc->afficherblog();


?>
