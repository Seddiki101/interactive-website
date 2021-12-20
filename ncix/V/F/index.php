<!DOCTYPE HTML>
<html>
	<head>
		<title>NCIX</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">


<?php
	
    include 'B:\apps\xampp\htdocs\integra\C\CSC.php';
	$categorieSerC=new CategorieSerC();
	$listeCtgser=$categorieSerC->afficherCat_ser(); 
?>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
					<nav>
						<button id="signb"><a href="Signin.php">Sign in</a></button>
						<button id="signb"><a href="Inscription.php">Sign Up</a></button>
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

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Simple Solutions for Complex Connections.</h1>
							</header>
							<div class="content">
								<p>It s all about tech</p>
								<ul class="actions">
									<li><a href="contact.html" class="button next scrolly">Contact Us</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
				<div id="main">
					
					
					<!-- About us -->
					<section>
						<div class="inner">
							<header class="major">
								<h2>About us</h2>
							</header>
							<p>
							SECURE, RELIABLE, HIGH-PERFORMANCE INTERCONNECTION, CLOUD AND COLOCATION SOLUTIONS.</p>
							<ul class="actions">
								<li><a href="about-us.html" class="button next">Read more</a></li>
							</ul>
						</div>
					</section>
					
					<!-- Featured Products -->
							<!-- Featured Products -->
							<section class="tiles">
								
							<?php
				foreach($listeCtgser as $categorie_Service){
			?>
			
			<article>
									<span class="image">
										<img src="i/<?php echo $categorie_Service['image_cs']; ?>" alt="" >
									</span>
									<header class="major">
										<h3><?php echo $categorie_Service['nom_cs']; ?> </h3>

										<p> _ </p>
.
										<div class="major-actions">
										
											<!-- <a href="ser.php?ID_cs=<?php // echo $service['ID_cs']; ?>"  class="button small next">Continue Reading_</a> -->
										
										
										<form method="POST" action="ser.php?ID_cs=<?php echo $categorie_Service['ID_cs']; ?>">
										
										<input type="submit" name="Modifier" value="continue reading">
										<input type="hidden" value=<?PHP echo $categorie_Service['ID_cs']; ?> name="ID_cs">
										
										
										</form>
										
										</div>
									</header>
								</article>
			<?php
				}
			?>

					<!-- Testimonials -->
					<section>
						<div class="p-3 py-5">
							<header class="major">
								<h2>Chat with our bot viki</h2>
							</header>
							<div class="row">
								
								
								<div id="messages" class="messages"></div>
			<input id="input" type="text" placeholder="Say something..." autocomplete="off" autofocus="true" />
								
							</div>
							
						</div>
					</section>

					<!-- Blog Posts -->



		
		
<script type="text/javascript" src="index.js" ></script>
<script type="text/javascript" src="constants.js" ></script>
<script type="text/javascript" src="speech.js" ></script>		
		
		<br/>
		<br/>


				
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
							<li>Copyright © 2022 NCIX </li>
							
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