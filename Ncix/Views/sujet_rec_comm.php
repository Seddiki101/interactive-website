<?php
require_once '../Controller/sujetC.php';
require_once '../Controller/blogC.php';


$blogc = new blogC();
$idc = $_GET["id"] ;
$result = $blogc->recjoin($idc);

$blogc=new blogC();


$listeblog=$blogc->afficherblog();


?>
