<?php
require_once "../Controller/sujetc.php";

$sujetc = new sujetc();

if(isset($_POST['searchButton']) && isset($_POST['search'])){
	$listesujet= $sujetc->searchSujetByName($_POST['search']);
	unset($_POST['search']);
	var_dump($listesujet);
}
?>