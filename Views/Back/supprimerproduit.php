<?php
	require_once '..\..\Controller\ProduitC.php';
	$ProduitC=new ProduitC();
	$ProduitC->supprimerproduit($_GET["NumProduit"]);
	header('Location:afficherListeProduits.php');
?>