<?php

include '..\..\M\commande.php';
include '..\..\C\comm.php';


if( isset($_POST['rib']) and isset($_POST['ncb']) and isset($_POST['nce']) )
{
	
$commande = new commande($_POST['rib'],$_POST['ncb'],$_POST['nce']);
	

	$commandeC=new commandeC();
	$commandeC->ajouterCommande($commande);
	header('Location: products.php');
}


?>
