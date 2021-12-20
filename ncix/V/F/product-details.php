<?php

require_once '..\..\C\config.php';
require_once '..\..\M\Produit.php';
require_once '..\..\C\ProduitC.php';

require_once '..\..\M\Categorie.php';
require_once '..\..\C\CategorieC.php';


$error = "";
// create a product
$Produit = null;

$ProduitC = new ProduitC();
$CatC = new CategorieC();

//Getting the Numproduit of the product 
if (isset($_GET['NumProduit'])) {
	$id = $_GET['NumProduit'];
	$Produit = $ProduitC->recupererproduit($id);
}
//And here I'm getting the number of likes and getting the fucntion Like 

if (isset($_POST['like'])) {
	$ProduitC->updateLikes($_POST['NumProduit']);
}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Ncix Products</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="index.html" class="logo"> <span>Ncix</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				 <li class="active"> <a href="index.html">Home </a> </li>

		                <li> <a href="AffctgF.php">Services</a> </li>

		                <li> <a href="products.php">Products</a> </li>

						<li><a href="contact.html">contact</a></li>

		                <li><a href="Affichersujet.php">Articles</a></li>

						<li><a href="cart.php">Cart</a></li>
						
						<li><a href="frontLivraison.php">Delivery</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1><?php echo $Produit['Nomproduit']; ?></h1>
					</header>

					<div class="row">
						<div class="col-md-5">
							<img src=" ..\assets\images\<?PHP echo $Produit['image_prod']; ?>" class="product-img" style="width:400px;height:600px">
						</div>

						<div class="col-md-7">
							<!---Outta stock--->
							<h2><?php echo $Produit['Prix']; ?> DT</h2>
							<?php if ($Produit['Qte_stock'] == 0) {
								echo "<p>Out of Stock</p>";
							}
							?>
							<p><?php echo $Produit['Prod_desc']; ?></p>

							<!---Likes--->
							<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

								<input type="hidden" name="NumProduit" value="<?php echo $Produit['NumProduit']; ?>">
								<input type="submit" value=" <?php echo $Produit['Likes']; ?> likes" name='like' />

							</form>
							<form   name="myForm" method="POST" action="ajouterpanier.php?id_article2=<?php echo $Produit['NumProduit'];?>" >
							<div class="row">
								<div class="col-sm-4">
									<label class="control-label">Extra 1</label>

									<div class="form-group">
										<select>
											<option value="0">Extra 1</option>
											<option value="1">Extra 2</option>
											<option value="2">Extra 3</option>
										</select>
									</div>
								</div>

								<div class="col-sm-8">
									<label class="control-label">Quantity</label>

									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<input type="text" name="name" id="name">
											</div>
										</div>

										<!---Outta stock--->
										<div class="col-sm-6">
										
												<input type="submit" href="" class="primary"       value="Add to Cart">
												 </form>
											

											

										</div>
									</div>
									
									
									<div class="row">
										
										<!-- pdf button created-->
									<a href="productPDF.php?NumProduit=<?php echo $Produit['NumProduit']; ?>" class="button small next">Download Technical Sheet</a>

									</div>
								</div>
							</div>
						</div>
					</div>

					<br>

					<p><?php echo $Produit['Prod_desc']; ?></p>




















				</div>
			</section>

		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="icons">
					<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
				</ul>
				<ul class="copyright">
					<li>Copyright © 2020 Company Name - Template by:</li>
					<li> <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>