<?php
	require_once 'C:\\xampp\htdocs\ncix\Controller\CategorieC.php';
	$CategorieC=new CategorieC();
	$CategorieC->supprimercategorie($_GET["Id_cat"]);
	header('Location:afficherListeCategories.php');
?>