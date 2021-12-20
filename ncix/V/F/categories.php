<?php
require_once '..\..\C\ProduitC.php';
require_once '..\..\C\CategorieC.php';
$ProduitC = new ProduitC();
$CategorieC = new CategorieC();
$listeProduits = $ProduitC->afficherproduits();
$listeCategorie = $CategorieC->affichercategories();

?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>Categories</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
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

		                <li> <a href="products.php">Products</a> </li>

		                <li> <a href="checkout.php">Checkout</a> </li>

		                <li><a href="contact.php">Contact Us</a></li>

		                <li class="dropdown">
		                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">About</a>
		                    
		                    <ul class="dropdown-menu">
		                        <li> <a href="about-us.html">About Us</a> </li>
				                <li><a href="team.html">Team</a></li>
				                <li> <a href="blog.html">Blog</a> </li>

				                <li><a href="testimonials.html">Testimonials</a></li>
				                
				                <li><a href="terms.html">Terms</a></li>
		                    </ul>
		                </li>
            		</ul>
				</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Categories des produits</h1>
							</header>
							<div class="content">
								<p>Enjoy!</p>
								
							</div>
						</div>
					</section>

				<!-- Main -->
				<div id="main">
					
				<section class="tiles">
				<?php
					foreach ($listeCategorie as $Categorie) {
					?>

						<article>
							
							<span class="image">
								<img src=" ../../assets/images/<?PHP echo $Categorie['image_cat']; ?>" class="product-img">
							</span>
							<header class="major">
								<h3><?php echo $Categorie['NomCategorie']; ?></h3>

								<a href="productsbycat.php?NumCategorie=<?php echo $Categorie['Id_cat']; ?>" class="button small next">View Products</a>

							</header>
						</article>
					<?php
					}
					?>
				</section>

					

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