<?php
    include_once 'C:\xampp\htdocs\Ncix\Model\blog.php';
    include_once 'C:\xampp\htdocs\Ncix\Controller\blogC.php';

    $error = "";

    // create blog
    $blog = null;

    // create an instance of the controller
    $blogC = new blogC();
    if (
        isset($_POST["id"]) &&  
        isset($_POST["nom"]) &&     
        isset($_POST["email"]) && 
        isset($_POST["comment"])
    ) {
        if (
            !empty($_POST['id']) &&
            !empty($_POST['nom']) &&
            !empty($_POST["email"]) && 
            !empty($_POST["comment"])
        ) {
            $blog = new blog(
                $_POST['id'],
                $_POST['nom'],
                $_POST['email'],
                $_POST['comment']
            );
            $blogC->ajouterblog($blog);
            header('Location:/Ncix/Views/afficherblog.php');
        }
        else
            $error = "Missing information";
    }

    
?>
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
										<h1>Black Friday Amazon : Jusqu'à -41% sur les jeux et jouets pour préparer Noël</h1>

										<h4><i class="fa fa-user"></i>Seif Boulabiar &nbsp;&nbsp;&nbsp;&nbsp;  <i class="fa fa-calendar"></i> 14/11/2021 10:30   &nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-eye"></i> 114</h4>
									</header>
									<span class="image main"><img src="images/blog-1-720x480.jpg" alt="" /></span>
									<p>Le Black Friday Amazon revient le vendredi 26 novembre pour une journée entière consacrée aux soldes et aux bons plans. Ne manquez pas cet événement qui vous permet de préparer vos cadeaux de Noël à moindre prix. Amazon a déjà commencé les promotions avec son évènement "Black Friday avant l'heure". C’est l’occasion d’anticiper les fêtes de fin d’année sans qu’elles vous coûtent un bras. Avec le Black Friday Amazon, ayez accès à des milliers de promotions sur le site. Elles seront disponibles dès le 26 novembre à partir de minuit. Les offres promotionnelles durent 24 heures. Profitez-en pour commander des jeux et des jouets à bas prix. Cette journée noire est l’un des événements les plus attendus de la fin de l’année. Une large sélection de produits, sur Amazon comme ailleurs, baissent de prix de façon exceptionnelle, ce qui vous permet de réaliser de grandes économies avant Noël. Voici les meilleurs bons plans du Black Friday Amazon sur les jeux et les jouets.</p>
									<p>Black Friday Amazon : 10 offres jeux et jouets à saisir pour préparer Noël
<ul>
<li>Playmobil Bateau Pirates à 54€99 au lieu de 93€99</li>
<li>Playmobil Caserne de pompiers à 54€06 au lieu de 78€60</li>
<li>Playmobil Maison Transportable à 29€80 au lieu de 34€84</li>
<li>Playmobil City Action Cargo à 79€99 au lieu de 104€99</li>
<li>LEGO Harry Potter Le Calendrier de l’Avent 2021 à 19€50 au lieu de 29€99</li>
<li>LEGO Harry Potter Poudlard : Rencontre avec Touffu à 29€80 au lieu de 39€99</li>
<li>Pokémon Coffret Académie de Combat à 26€90 au lieu de 29€95</li>
</ul>
<p>Amazon aime vous faire plaisir et lance l’opération Black Friday avant l’heure. Pour vous donner un avant-goût de ce que sera cette journée du « Vendredi noir », le site de vente en ligne vous propose déjà et en exclusivité de nombreuses réductions sur les jeux et les jouets. Cette opération dure du 8 au 18 novembre uniquement, alors profitez-en pour commander vos jeux préférés avant le Black Friday Amazon et Noël. Grâce au Black Friday avant l’heure d’Amazon, vous bénéficiez déjà de remises sur les jouets. Ne manquez pas les offres éclair ou bien les produits à moins de 20 euros qui vous sont proposés. À titre d’exemple, en ce moment, profitez de 30% de réduction immédiate sur les jouets Playmobil grâce au Black Friday Amazon avant l’heure.</p>
								</div>
							</section>

					</div>

					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Leave a Comment</h2>
								</header>
                                      <script type="text/javascript"src="script.js"></script>
								<form name="f" method="post" action=""onsubmit="return validationForm(event)">
									<div class="fields">
										<div class="field half">
											<label for="id" name="id">Id</label>
											<input type="text" name="id" id="id">
											<p id="errorId" class="error"></p>
										</div>
										<div class="field half">
											<label for="name" name="name">Name</label>
											<input type="text" name="name" id="name">
											<p id="errorNom" class="error"></p>
										</div>
										<div class="field half">
											<label for="email" name="email">Email</label>
											<input type="text" name="email" id="email">
											<p id="errorMail" class="error"></p>
										</div>
										<div class="field">
											<label for="message" name="comment">Message</label>
											<textarea name="comment" id="comment" rows="6"></textarea>
											<p id="Comment" class="error"></p>
										</div>

										<div class="field half text-right">
											<ul class="actions">
												<li><input type="submit" value="Send Message" class="primary"></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-info"></span>
										<h3>Lorem ipsum dolor sit amet.</h3>
										<span>Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur. Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-share"></span>
										<h3>Share</h3>

										<p style="position: relative;">
											<a href="#" style="position: relative;" class="icon alt fa-twitter"><span class="label">Twitter</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-facebook"><span class="label">Facebook</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a> &nbsp;
											<a href="#" style="position: relative;" class="icon alt fa-behance"><span class="label">Behance</span></a>
										</p>
									</div>
								</section>
							</section>
						</div>
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