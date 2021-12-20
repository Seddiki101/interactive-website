<?php
	require_once 'B:\apps\xampp\htdocs\ncix\C\CategorieC.php';
	$CategorieC=new CategorieC();
	$CategorieC->supprimercategorie($_GET["Id_cat"]);
	header('Location:afficherListeCategories.php');
?>