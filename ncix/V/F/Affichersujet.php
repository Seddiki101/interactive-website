<?php
include_once "../../C/sujetc.php";

$sujetc = new sujetc();

if(isset($_POST['submit'])){
	$listesujet= $sujetc->searchSujetByName($_POST['search']);
    
}
if((!isset($_POST['search'])) || $_POST['search']==""){
    $listesujet = $sujetc->affichersujet();
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>NCIX</title>
  <title>NCIX</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<style>
.heightlikes {
    width: fit-content !important;
    margin-left: auto;
    color: green;
    font-size: 26px;
    display: flex;
    align-items: unset;
    
}

.fa-sort-up {
    padding: 8px
}
.serch-form{
	display: flex;
    width: 100%;
    margin: 5px;
}
.searchButton{
	display: inline-block;
    margin-right: 5px;
}


</style>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
			<div style="width:100%;">
				<form action="" method="POST" class="serch-form">
					<input type="text" name="search" id="search" placeholder="search">
					<button type="submit" class="searchButton" name="submit">search</button>
				</form>
			</div>
            <nav>
                <button id="signb"><a href="Sign in.html">Sign in</a></button>
                <button id="signb"><a href="Inscription.html">Sign Up</a></button>
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

        <!-- Main -->
        <div id="main" class="alt">

            <!-- One -->
            <section id="one">
                <div class="inner">
                    <header class="major">
                        <h1>Blog</h1>
                    </header>
                </div>
            </section>

            <!-- Featured Products -->
            <section class="tiles">
                <?php foreach($listesujet as $sujet)
                                {
                                       ?>
                <article>
                    <span class="image">
                        <img src="../assets/images/<?= $sujet['image'] ?>" alt="" />
                    </span>
                    <header class="major">
                        <?php if($sujet['likes'] >= 10){ ?>
                        <div class="heightlikes">
                            <i class="fa fa-thumbs-up"></i><i class="fa fa-sort-up"></i>
                        </div>
                        <?php }?>
                        <h3><?php echo "". $sujet['titresujet'] ;?></h3>

                        <p>Seif Boulabiar &nbsp;/&nbsp; 14/11/2021 10:30 &nbsp;/&nbsp; 114</p>

                        <div class="major-actions">
                            <a href="sujetdetails.php?id=<?php echo $sujet['id'] ;?>" class="button small next">Read
                                Blog</a>
                        </div>
                    </header>
                </article>
                <?php } ?>
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