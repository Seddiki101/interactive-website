<?php
include_once '../Model/Produit.php';
include_once '../Controller/ProduitC.php';

include_once '../Model/Categorie.php';
include_once '../Controller/CategorieC.php';


$error = "";
// create a product
$Produit = null;

$ProduitC = new ProduitC();
$CatC = new CategorieC();

if (isset($_GET['NumProduit'])) {
	$id = $_GET['NumProduit'];
	$Produit = $ProduitC->recupererproduit($id);
}
if(isset($_POST['like'])) {
	$id = $_POST['NumProduit'];
	$ProduitC->updateLikes($id);	
	
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
			<a href="index.html" class="logo"><strong>Bienvenue chez</strong> <span>Ncix</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li class="active"> <a href="index.html">Home </a> </li>

				<li><a href="index.html">Other</a></li>
				<li><a href="about-us.html">About Us</a></li>
				<li><a href="team.html">Team</a></li>
				<li><a href="testimonials.html">Testimonials</a></li>
				<li><a href="faq.html">FAQ</a></li>
				<li><a href="terms.html">Terms</a></li>
				<li><a href="contact.html">Contact Us</a></li>
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
							<img src="../Views/assets/img/<?PHP echo $Produit['image_prod']; ?>" class="product-img">
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

										<div class="col-sm-6">
											<?php if ($Produit['Qte_stock'] == 0) {
												echo '<input type="submit"  class="primary" value="Add to Cart" disabled>';
											} else {
												echo '<input type="submit" class="primary" value="Add to Cart">';
											}

											?>

										</div>
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