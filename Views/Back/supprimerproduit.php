<?php
	require_once 'C:\\xampp\htdocs\ncix\Controller\ProduitC.php';
	$ProduitC=new ProduitC();
	$ProduitC->supprimerproduit($_GET["NumProduit"]);
	header('Location:afficherListeProduits.php');
?>