<?php
include_once '../../M/Utilisateur.php';
include_once '../../C/UtilisateurC.php';
include_once '../../C//roleC.php';
session_start();

$message = "";
if(isset($_SESSION['role']) ){
	if($_SESSION['role']=='admin'){
		header('Location:./../back/index.php');
    }else if($_SESSION['role']=='user'){
        header("Location:ProfilUser.php");
    }
}else if(!isset($_SESSION['resetEmail'])){
    header('Location:resetPassword.php');
}

if (isset($_POST['submit']) && isset($_POST['password'])  && isset($_POST['passwordc']) && isset($_POST['code'])) {
	if (!empty($_POST['password']) && !empty($_POST['passwordc'])  && !empty($_POST['code'])) {
		if($_POST['password'] != $_POST['passwordc']){
			$message="les mot de passe ne sont pas identique";
		}else{
			$userC = new UtilisateurC();
			$message = $userC->changePassword($_SESSION['resetEmail'], $_POST['code'], $_POST['password']);
			if ($message == "true") {
				unset($_SESSION['resetEmail']);
				header('Location:signin.php');
			}
		}

		
	} else {
		$message = "cahmp de mot de passe est vide";
	}
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
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>


<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">


        <div class="message">
            <?php echo $message;  ?>

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
        <br />
        <div id="sign_in">
            <form action="" method="post" id="f" name="f1">

                <div class="form-group">
                    <label for="code">code</label>
                    <input type="text" id="code" name="code" placeholder="code de verification" class="form-group">
                </div>
                <div class="form-group">
                    <label for="password">mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="mot de passe" class="form-group">
                </div>
                <div class="form-group">
                    <label for="passwordc">confirmer mot de passe</label>
                    <input type="password" id="passwordc" name="passwordc" placeholder="confirmer mot de passe"
                        class="form-group">
                </div>
                <input type="submit" name="submit" value="change password">
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