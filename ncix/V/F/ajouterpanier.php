<?php
include '..\..\M\panier.php';
include '..\..\C\pan.php';
if (isset($_GET['id_article2'])){
	$id=$_GET['id_article2'];
$conn = mysqli_connect("localhost","root","","ncix");
$result= $conn->query("SELECT * FROM produit WHERE NumProduit=$id") or die ($conn->error);
$row =$result->fetch_assoc();
} 
$eee=$_GET['id_article2'];
$ee=$row['Nomproduit'];
$e=$row['Prix'];

$panier = new panier($eee,$e,$ee);


	$panierC=new panierCC();
	$panierC->ajouterPanier($panier);
	header('Location: cart.php');


?>