<?php
include_once '../../M/Utilisateur.php';
include_once '../../C/UtilisateurC.php';
include_once '../../C/roleC.php';
session_start();


if(isset($_SESSION['role']) ){
	if($_SESSION['role']=='admin'){
		header('Location:../B/index.html');

	}else if($_SESSION['role']=='user'){
		header('Location:codeVerfication.php');

	}
}

$message="";
$userC = new UtilisateurC();
if (isset($_POST["email"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["email"]) &&
        !empty($_POST["password"]))
    {   $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
		
        if($message!='pseudo ou le mot de passe est incorrect')
        {
			$_SESSION['user'] = $message;
			$rolec=new RoleC();
			$_SESSION['role'] = $rolec->recupererrole($message['role'])['type'];
			var_dump($_SESSION['role'] == "admin");
			if($_SESSION['role'] == "admin"){

				header('Location:../B/index.html');
			}else{
				header('Location:codeVerfication.php');

			}

        }
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>




<!DOCTYPE HTML>
<html>
	<head>
		<title> host 🐘 </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/host.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">


    <div class="message">
      <?php if($message=="pseudo ou le mot de passe est incorrect") { echo $message; } ?>
    </div>
    

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
					<nav>
						<button id="signb"><a href="inscription.php">Sign Up</a></button>
						<a href="#menu">Menu</a>
					</nav>
				</header>

				<!-- Menu -->
				<nav id="menu">
					<ul class="links">
		                <li> <a href="index.html">Home </a> </li>

		                <li> <a href="jobs.html">Jobs</a> </li>

		                <li> <a href="blog.html">Blog</a> </li>

		                <li> <a href="about-us.html">About Us</a> </li>

		                <li><a href="team.html">Team</a></li>

		                <li><a href="testimonials.html">Testimonials</a></li>
		                
		                <li class="active"><a href="terms.html">Terms</a></li>

		                <li><a href="contact.html">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Main -->
				<br/>
				<div id = "sign_in">
					<form name="frmUser" method="post" action="">
						<div class="form-group">
							<label for="email">E-mail : </label>
							<input type="text" id="email" name="email" placeholder="Email" class="form-group" >
						</div>
						<div class="form-group">
							<label for="email">mot de passe</label>
							<input type="password" id="password" name="password" placeholder="mot de passe" class="form-group" >
						</div>
						
						 <p><a href="resetPassword.php">forget Password?</a></p>
						 
                        <input type="submit" name="submit" value="Connexion" >
                        <input type="reset" name="submit" value="Reset" >
					</form>
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