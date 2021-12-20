<?php
	
    include 'B:\apps\xampp\htdocs\integra\C\CSC.php';
	$categorieSerC=new CategorieSerC();
	$listeCtgser=$categorieSerC->afficherCat_ser(); 
?>
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

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
					<nav>
						<button id="signb"><a href="Sign in.html">Sign in</a></button>
						<button id="signb"><a href="Inscription.html">Sign Up</a></button>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.html">Home </a> </li>

		                <li> <a href="jobs.html">Jobs</a> </li>

		                <li class="active"> <a href="blog.html">Blog</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>

		                <li><a href="team.html">Team</a></li>

		                <li><a href="testimonials.html">Testimonials</a></li>
		                
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
										<h1>Categories des services </h1>
									</header>
								</div>
							</section>

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
										
										
										<form method="POST" action="ser.php">
										
										<input type="submit" name="Modifier" value="continue reading">
										<input type="hidden" value=<?PHP echo $categorie_Service['ID_cs']; ?> name="ID_cs">
										
										
										</form>
										
										</div>
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
							<li>Copyright © 2020 Company Name - Template by:</li>
							
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