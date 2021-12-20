<!DOCTYPE HTML>
<?php

require_once '../../C/UtilisateurC.php';
require_once '../../M/Utilisateur.php';
session_start();
if(isset($_SESSION['role'])){
	if($_SESSION['role']=='admin'){
		header('Location:./../back/index.php');
	}else if($_SESSION['role']=='user'){
		header('Location:ProfilUser.php');
	}
}


if(isset($_POST['Inscrir']) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["login"]) && isset($_POST["password"]) ) {
    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["login"]) && !empty($_POST["password"]) && !empty($_POST["password"]) && $_POST["password"]==$_POST["cpassword"]){
	$user =new Utilisateur($_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['password'],1,'' );
	$userC = new UtilisateurC();
	$userC->ajouterUtilisateur($user);
}}

?>
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

<script lang="text/javascript">
function verif(){
	if(f1.password.value != f1.cpassword.value){
		document.getElementById('message').innerHTML = "les mot de passe ne sont pas identique";
	return false;	
	}

    if (f1.nom.value.length == 0 || f1.prenom.value.length==0 ) {
                document.getElementById('message').innerHTML = "remplir tout les champ";
                return false;

            }
            if(f1.password.value.length <8){
                document.getElementById('message').innerHTML = "mot de passe doit contenir au moin 8 caratctére";
                return false;
            }
            

            document.getElementById("f").submit();

            return true;
}
</script>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
            <nav>
                <button id="signb"><a href="signin.php">Sign in</a></button>
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
        <div class="inscription-form">
        <div id="message" style="color :red"> </div>
            <form name="f1"  action="" method="post" onsubmit="return(verif())" id="f" name="f1">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id=nom class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="prenom">Prenom : </label>
                        <input type="text" name="prenom" id="prenom" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">E-mail : </label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="login">Login : </label>
                        <input type="text" name="login" id="login" class="form-control" required>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id=password class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="cpassword">Confirmé Mot de passe : </label>
                        <input type="password" name="cpassword" id="cpassword" class="form-control" required>
                    </div>
                </div>
                <input type="submit" class="btn btn-default" name="Inscrir" value="Inscrir">
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