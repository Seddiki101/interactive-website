<!DOCTYPE HTML>
<?php
include_once '../../M/Utilisateur.php';
include_once '../../C/UtilisateurC.php';
include_once '../../C/roleC.php';
session_start();

if (isset($_SESSION) && isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
} else {
    header('Location:signin.php');
}
$message = "";

if (isset($_POST['submit'])) {
    
    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])) {
        if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email'])) {
            $newuser = new Utilisateur($_POST['nom'], $_POST['prenom'], $_POST['email'], "", $user['role'], $user['img_path']);
            if (isset($_POST['password']) && !empty($_POST['password'])) {
                $newuser->setPassword($_POST['password']);
            }
            if (isset($_FILES['img']['name']) && !empty($_FILES['img']['name'])) {
                $newuser->setImg($_FILES['img']['name']);
            }

            $userC = new UtilisateurC();
            $message = $userC->modifierUtilisateur($newuser, $user['id']);

            $_SESSION['user'] = $userC->recupererUtilisateur($user['id']);
            $user = $_SESSION['user'];
        }
    }
}



?>
<html>

<head>
    <title>NCIX</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/profil.css" />
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
            <nav>
                <button id="signb"><a href="../../C/deconnection.php">déconnexion</a></button>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li> <a href="index.html">Home </a> </li>

                <li> <a href="jobs.html">Jobs</a> </li>

                <li> <a href="blog.html">Blog</a> </li>

                <li class="active"> <a href="about-us.html">About Us</a> </li>

                <li><a href="team.html">Team</a></li>

                <li><a href="testimonials.html">Testimonials</a></li>

                <li><a href="terms.html">Terms</a></li>

                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>

        <!-- Main -->
        <div id="main" class="alt">
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h1>Profil</h1>
                    </header>

                    <div class="container rounded bg-white mt-5 mb-5">

                        <div class="row">
                            <div class="col-md-3 border-right">
                                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../assets/images/<?php echo $user['img_path'] ?>"><span class="font-weight-bold"><?php echo $user['nom'] . ' ' . $user["prenom"] ?></span><span class="text-black-50"> <?php echo $user['email'] ?> </span><span> </span></div>
                            </div>
                            <div class="col-md-5 border-right">
                                <div class="p-3 py-5">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="text-right">Profile</h4>
                                    </div>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <div style="color: blue;">
                                            <?php echo $message  ?>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">nom</label><input type="text" class="form-control" placeholder="nom" value="<?php echo $user['nom'] ?>" name="nom"></div>
                                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="<?php echo $user['prenom'] ?>" placeholder="prenom" name="prenom"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">mot de passe</label><input type="password" class="form-control" placeholder="mot de passe" name="password"></div>
                                            <div class="col-md-6"><label class="labels">email</label><input type="email" class="form-control" value="<?php echo $user['email'] ?>" placeholder="email" name="email"></div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-md-6"><label class="labels">status</label><input type="text" class="form-control" placeholder="status" value="<?php echo $user['status'] ?>" name="status" disabled></div>
                                            <div class="col-md-6"><label class="labels">image</label><input type="file" class="form-control" name="img" style="border: none !important"></div>
                                        </div>

                                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="submit">Save Profile</button></div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

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