<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700;800&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  min-height: 100vh;
  background: #232427;
}

body .container1 {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

body .container1 .card {
  position: relative;
  min-width: 320px;
  height: 440px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
}

body .container1 .card:nth-child(1) .box .content a {
  background: #2196f3;
}

body .container1 .card:nth-child(2) .box .content a {
  background: #e91e63;
}

body .container1 .card:nth-child(3) .box .content a {
  background: #23c186;
}

body .container1 .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #3834A9;
  border-radius: 15px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container1 .card .box:hover {
  transform: translateY(-50px);
}

body .container1 .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 100%;
  background: rgba(255, 255, 255, 0.03);
}

body .container1 .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container1 .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container1 .card .box .content h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container1 .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container1 .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}
body .container1 .card .box .content a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

</style>
<?php

include_once '../../M/livreur.php';
include_once '../../C/livreurCf.php';
$livreurC = new livreurC();
$listeC = $livreurC->afficherLivreur();


if (
    isset($_POST["nom"]) &&
	isset($_POST["prenom"]) && 
	isset($_POST["email"]) &&  
     isset($_POST["type"]) && 
    isset($_POST["numtel"])
) {
    if (
        !empty($_POST["nom"]) &&
		!empty($_POST["prenom"]) &&
		!empty($_POST["email"]) && 
        !empty($_POST["type"]) && 
        !empty($_POST["numtel"]) 
    ) {
        if(!(strlen($_POST['numtel'])!=8 || strlen($_POST['nom'])>15 || strlen($_POST['prenom'])>15 || strlen($_POST['email'])>55 || strlen($_POST['type'])>15))
        {
            
        
        
        $livreur = new livreur(
            $_POST['nom'],
			$_POST['prenom'],
			$_POST['email'],
            $_POST['type'],
            intval($_POST['numtel'])
        );
        $livreurC->ajouterLivreur($livreur);
        
        header('Location:frontLivraison.php');
    }
    }
    else
        $error = "Missing information";
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PHPJabbers.com | Free Computer Store Website Template</title>
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
				
				<div class="container1">
				
<a href="#contact">Become a delivery guy</a>
<?php
include_once '../../M/livreur.php';
include_once '../../C/livreurCf.php';
$livreurC = new livreurC();
$listeC = $livreurC->afficherLivreur();
$i=0;

foreach($listeC as $livreur){
    $i=$i+1;
?>

  <div class="card">
    <div class="box">
      <div class="content">
        <h2><?php echo $i ?></h2>
        <h3><?php echo $livreur['nom']; ?></h3>
        <p>You can call me on  : <?php echo $livreur['numtel']; ?></p>
      </div>
    </div>
  </div>
<?php } ?>
 

</div>
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.html">Home </a> </li>

		                <li> <a href="products.html">Products</a> </li>

		                <li> <a href="checkout.html">Checkout</a> </li>

		                <li class="active"><a href="contact.html">Etre un livreur</a></li>

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

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>DELIVERY GUY</h1>
									</header>
									<span class="image main"><img src="images/map.jpg" alt="" /></span>
									<p> Fair wages with healt insucance included.</p>
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>You contact details</h2>
								</header>

								<div class="form-body">
        <div class="row">
            <div class="form-holder1">
                <div class="form-content2">
                    <div class="form-items2">
                        <h3>Register Today</h3>
                        <p>Fill in the data below.</p>
                        <form action="#" method="POST" class="requires-validation" novalidate>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom..." required>
                            </div>
							<div class="col-md-12">
                               <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prenom..." required>
                            </div>
							<div class="col-md-12">
                               <input class="form-control" type="text" name="email" id="email" placeholder="Email..." required>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="numtel" id="numtel" placeholder="Numtel..." required>
                            </div>
                            <div class="col-md-12">
                               <input class="form-control" type="text" name="type" id="type" placeholder="Type..." required>
                            </div>

                            

                           


                         


                       


                            <div class="form-button mt-3">
                              <input type="submit" value="Submit" onclick="verif();">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="#">contact@ncix.com</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-phone"></span>
										<h3>Phone</h3>
										<span>+216 28 308 455</span>
										<br>
										<span>+216 29 151 101</span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon alt fa-home"></span>
										<h3>Address</h3>
										<span>lot 13, <br> Esprit ecole d'ingenieurs, Residence Essalem II, <br> Avenue Fethi Zouhir, Cebalat Ben Ammar 2083</span>
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

<script>
    function verif() {

var nom=document.getElementById('nom').value;
var prenom=document.getElementById('prenom').value;
var email=document.getElementById('email').value;
var type=document.getElementById('type').value;
var numtel=document.getElementById('numtel').value;

if (nom.length === 0 || type.length === 0 || numtel.length===0) {
    alert("Vérifier vos donneés ");
}
else {
if (nom.length >15)
{
    alert("Votre nom doit avoir une longueur inférieur à 15 caractères");
}
else {

if (type.length >15)
{
    alert("Votre type doit avoir une longueur inférieur à 15 caractères");
}

else{

if (numtel.length!=8)
{
    alert("Votre numtel dot s'ecrire sur 8 chiffres");
}


}
}
}














}
</script>