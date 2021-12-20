<?php
	include_once 'B:\apps\xampp\htdocs\ncix\M\CS.php';
	include 'B:\apps\xampp\htdocs\ncix\C\CSC.php';
	$serviceC=new ServiceC();

					if (isset($_GET['ID_cs'])){
	$servo=$serviceC->findservicebyctg($_GET['ID_cs']);
			}
	

if(isset($_POST['like'])){
		$serviceC->incrementlikes($servo['IDs'], $servo['likes']);

	}

	?>

<!DOCTYPE HTML>
<html>
	<head>
	    <title>service</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/Servs.css" />
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
		                <li class="active"> <a href="index.html">Home </a> </li>

		                <li><a href="index.html">Other</a></li>
		                <li><a href="about-us.html">About Us</a></li>
		                <li><a href="team.html">Team</a></li>
		                <li><a href="testimonials.html">Testimonials</a></li>
		                <li><a href="faq.html">FAQ</a></li>
		                <li><a href="terms.html">Terms</a></li>
		                <li><a href="contact.html">Contact Us</a></li>
            		</ul>
				</nav>

				<!-- Main -->
					<div id="main" class="alt">









						<!-- One -->
							<section id="one">
								<div class="inner">
								
								
								
								
								
								
								
								
								
								
								
								<!---Likes--->
								
							<h4>
                            <i class="fa fa-thumbs-up"></i> likes: <?php echo $servo['likes'] ?>
                        
						</h4>

 
						<form method="POST">

                        <input type="submit" class="like-button" style="display: block;
    					margin: 10px ;" name="like" value ="Like"><i class="fa fa-thumbs-up"></i>

                </form>
								
								
								
								
								
								
								
									<header class="major">
										<h1> <?php echo $servo['nom_ser']; ?> </h1>
									</header>

									<div class="row">
										<div class="col-md-5">
											<img src="i/<?php echo $servo['image_ser']; ?>" class="img-responsive" alt="">
										</div>

										<div class="col-md-7">
											<h2>  </h2>

												<?php $x=$servo['frais']; ?>
											
										<form action="ajouterpanier2.php?id_article2=<?php echo $servo['IDs'];?>" method="POST">
														<div class="col-sm-6">
								                  	<label class="control-label"> Plan , price per month </label>

								                  	<div class="form-group">
									                    <select name = "s">
									                      	<option value=<?php echo($x+2); ?> >Business  <?php echo ($x+2); ?>$ </option>
									                      	<option value=<?php echo($x);   ?> >Personal  <?php echo($x); ?>$</option>
									                      	<option value=<?php echo($x+3); ?> >Express   <?php echo($x+3); ?>$</option>
									                    </select>
														<br/>
														
														
													</div>	
														
													<label class="control-label">Quantity</label>

								                  	<div class="row">
									                    <div class="col-sm-5">
									                      	<div class="form-group">
									                        	<input type="text" name="qte" id="qte">
									                      	</div>
									                    </div>

									                   
								                  	</div>
								                </div>


													
													<div class="col-sm-4">
								                <div>
								                  	<label class="control-label" id= "dura">Duration</label>

								                  	<div>
									                    <select id = "dur">
									                      	<option value="0">Months</option>
									                      	<option value="1">Years</option>
									                      	
									                    </select>
								                  	</div>
								                </div>
</div>


<br/>
<label for="start">Start date:</label>

<input type="date" id="start" name="trip-start"
       value="2021-12-01"
       min="2021-01-01" max="2055-12-31">


<br/>
<br/>


    
												<div class="row">
								                <div class="col-sm-4">
								                
								                  	<div class="col-sm-6">
								                      		<input type="submit" class="primary" id = "ssbmt" name="submit" value="Add to Cart">
									                    </div>	
													</div>
													
								                </div>
												
</form>												

								             
								            
										
									</div>
									
									</div>
									
									<div>
									
									<br/>
									<br/>

									<p>
										<?php echo $servo['Description']; ?>	
									</p>

					
								</div>
								<a href=<?php echo $servo['demo']; ?> > Try demo </a>
								<div>
								
								</div>
								
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