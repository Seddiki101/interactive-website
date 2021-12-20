<?php
	require_once 'B:\apps\xampp\htdocs\ncix\C\ProduitC.php';
	$ProduitC=new ProduitC();
	$ProduitC->supprimerproduit($_GET["NumProduit"]);
	header('Location:afficherListeProduits.php');
?>