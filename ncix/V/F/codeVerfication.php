<?php
include_once '../../M/Utilisateur.php';
include_once '../../C/UtilisateurC.php';
include_once '../../C/roleC.php';
session_start();

$message="";
if(isset($_SESSION['role']) ){
	if($_SESSION['role']=='admin'){
		header('Location:./../back/index.php');
    }
}else{
		header('Location:signin.php');

}

if(isset($_POST['submit']) && isset($_POST['code'])){
    if(!empty($_POST['code'])){

        $userC =new UtilisateurC();
        $message = $userC->verfierCompte($_SESSION['user']['id'], $_POST['code']);
    }else{
        $message="case de code est vide";
    }
}

if($message=="true"){
    $_SESSION['user']['status']="verified";
}

if( $_SESSION['user']['status']=="verified"){
    header("Location:ProfilUser.php");

}

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
      <?php  echo $message;  ?>

    </div>
    

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
					<nav>
						<button id="signb"><a href="Signin.php">Sign Up</a></button>
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
							<label for="email">code de verfication</label>
							<input type="text" id="code" name="code" placeholder="code de verfication" class="form-group" >
						</div>
                        <input type="submit" name="submit" value="verification" >
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