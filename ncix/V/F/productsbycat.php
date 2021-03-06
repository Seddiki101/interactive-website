<?php
require_once '..\..\C\ProduitC.php';
require_once '..\..\C\CategorieC.php';
$ProduitC = new ProduitC();
$CategorieC = new CategorieC();
//check the used method to pass the id of the categorie
if (isset($_GET['NumCategorie'])) {
	$id_cat = $_GET['NumCategorie'];
}
if (isset($_POST['categorie'])) {
	$id_cat = $_POST['categorie'];
}


$listeProduits = $ProduitC->afficherproduitsParCategorie($id_cat);
$listeCategorie = $CategorieC->affichercategories();

?>


<!DOCTYPE HTML>
<html>

<head>
	<title>Produis de Ncix</title>
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


				<li class="active"> <a href="categories.php">Categories </a> </li>
				<li><a href="index.html">Home</a></li>

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
						<h1>Products</h1>
					</header>
					<!-- Products by category -->
					<?php
					if (isset($_POST['categorie'])) {

					echo "<form action='productsbycat.php' method='POST'>";
					echo "<select name='categorie' value='' id='filterCategorie'>Categorie</option>";
					foreach ($listeCategorie as $Categorie) {
								echo "<option value=$Categorie[Id_cat]>$Categorie[NomCategorie]</option>";
							}
							echo "</select>";
							echo "<input type='submit' class='button' value='Filter'></form>";
						}
					?>
				</div>
				<section class="tiles">
					<!-- Featured Products -->
					<?php
					foreach ($listeProduits as $Produit) {
					?>

						<article>
							<!---hot image if likes>100--->
							<?php if ($Produit['Likes'] >= 100) {
								echo
								"<div style='position: absolute; top: 0; right: 0; width: 100px; text-align:right;'>
								<img src='../../assets/images/hot-item.png' class='product-img'>
							</div>";
							}
							?>
							<span class="image">
								<img src=" ../../assets/images/<?PHP echo $Produit['image_prod']; ?>" class="product-img">
							</span>
							<header class="major">
								<h3><?php echo $Produit['Nomproduit']; ?></h3>

								<p><?php echo $Produit['Prix']; ?> </p>

								<p><?php echo $Produit['Prod_desc']; ?></p>
								<?php if ($Produit['Qte_stock'] == 0) {
									echo "<p style='color:red'>Out of Stock</p>";
								}
								?>
								<a href="product-details.php?NumProduit=<?php echo $Produit['NumProduit']; ?>" class="button small next">View Product</a>

							</header>
						</article>
					<?php
					}
					?>
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
					<li>Copyright ?? 2020 Company Name - Template by:</li>
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