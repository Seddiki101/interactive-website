<?php
include '..\..\M\panier.php';
include '..\..\C\pan.php';
if (isset($_GET['NumProduit'])){
	$id=$_GET['NumProduit'];
$conn = mysqli_connect("localhost","root","","ncix");
$result= $conn->query("SELECT * FROM produit WHERE NumProduit=$id") or die ($mysqli->error);
$row =$result->fetch_assoc();
} 
$eee=$_GET['NumProduit'];
$ee=$row['Nomproduit'];
$e=$row['Prix'];

$panier = new panier($eee,$e,$ee);


	$panierC=new panierC();
	$panierC->ajouterPanier($panier);
	header('Location: cart.php');


?>