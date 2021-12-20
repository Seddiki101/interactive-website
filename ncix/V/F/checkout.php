<!DOCTYPE html>
<?php
include '..\..\M\panier.php';
include '..\..\C\pan.php';
$panierC=new panierC();

$listepanier=$panierC->afficherPanier(); 
?>

<!DOCTYPE HTML>
<html>

	<head>
		<script type="text/javascript" src="cs.js"></script>
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
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            
                            <!--/ End Tab Nav -->
                        </div>	
		<!-- End Breadcrumbs -->
				
		<!-- Start Checkout -->
		<section class="shop checkout section">
			<div class="container">
				<div class="row"> 
					<div class="col-lg-8 col-12">
						<div class="checkout-form">
							<h2>Make Your Checkout Here</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
							<form   name="myForm" method="POST" action="ajoutercommandeC.php" >
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>RIB<span>*</span></label>
											<input  type="text" name="rib" id="rib"   >
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Numero de carte bancaire<span>*</span></label>
											<input  type="text" name="ncb" id="ncb" >
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>Numero de carte etudiant<span>*</span></label>
											<input  type="text" name="nce" id="nce" >
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<label>adresse pour livraison<span>*</span></label>
											<input  type="text" name="ncc" id="ncc" >
										</div>
									</div>
									
									
									
									
								
								
								
								
									<div class="col-12">
									
									</div>
								</div>
							
							<!--/ End Form -->
						</div>
					</div>
					<div class="col-lg-4 col-12">
						<div class="order-details">
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>CART  TOTALS</h2>
								<div class="content">
									<ul>
									<?php	
									$s=0;
									foreach($listepanier as $row) { ?>
										<?php   $s=$s+$row['prix']  ?>
										<?php } ?>
										<li class="last">livraison <span> 10 </span> DT</li>
										<li class="last">Total : <span> <?php echo $s+10 ?></span> DT</li>
										
									</ul>
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Order Widget -->
							<div class="single-widget">
								<h2>Payments</h2>
								<div class="content">
									
										<input type="checkbox" id="mc" name="rnb" value="RnB">
							<label for="rnb">
								Master card</label><br>
							<input type="checkbox" id="bc" name="soul" value="soul">
							<label for="soul">
								 Carte bancaire</label><br>
							<input type="checkbox" id="pl" name="jazz" value="jazz">
							<label for="jazz">
								Paypal</label>
									
								</div>
							</div>
							<!--/ End Order Widget -->
							<!-- Payment Method Widget -->
							<div class="single-widget payement">
								<div class="content">
									<img src="images/payment-method.png" alt="#">
								</div>
							</div>
							<!--/ End Payment Method Widget -->
							<!-- Button Widget -->
							<div class="single-widget get-button">
								<div class="content">
									<div class="button"  >
										
										<button class="btn"  onclick="verif()" type="submit">proceed to checkout</button>
										
										
										
									</div>
								</div>
							</div>
							<!--/ End Button Widget -->
						</div>
					</div>
					</form>
				</div>
			</div>
		</section>
		<!--/ End Checkout -->
		
		<!-- Start Shop Services Area  -->
	
</body>
</html>