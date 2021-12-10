<?php
	require_once '..\..\Controller\CategorieC.php';
	$CategorieC=new CategorieC();
	$CategorieC->supprimercategorie($_GET["Id_cat"]);
	header('Location:afficherListeCategories.php');
?>