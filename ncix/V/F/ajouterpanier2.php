<?php
include '..\..\M\panier.php';
include '..\..\C\pan.php';
if (isset($_GET['id_article2'])){
	$id=$_GET['id_article2'];
$conn = mysqli_connect("localhost","root","","ncix");
$result= $conn->query("SELECT * FROM service WHERE IDs=$id") or die ($conn->error);
$row =$result->fetch_assoc();
} 
$eee=$_GET['id_article2'];
$ee=$row['nom_ser'];
$e=$row['frais'];

$panier = new panier($eee,$e,$ee);


	$panierC=new panierC();
	$panierC->ajouterPanier($panier);
	header('Location: cart.php');


?>