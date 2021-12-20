<?php
include 'B:\apps\xampp\htdocs\ncix\M\commande.php';
include 'B:\apps\xampp\htdocs\ncix\C\comm.php';

$commandeC=new commandeC();
$listecommande=$commandeC->afficherCommande(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.html">
			  		NCIX
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav nav-icons">
						<li class="active"><a href="#">
							<i class="icon-envelope"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-eye-open"></i>
						</a></li>
						<li><a href="#">
							<i class="icon-bar-chart"></i>
						</a></li>
					</ul>





					<form class="navbar-search pull-left input-append" action="afficherSearch.php" method="POST">
						<input class="span3" type="text" id="search" name="search" >
						<button class="btn" id="searchButton" name="searchButton" type = "submit ">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Item No. 1</a></li>
								
								<li><a href="#">Don't Click</a></li>
								<li class="divider"></li>
								<li class="nav-header">Example Header</li>
								<li><a href="#">A Separated link</a></li>
															</ul>
						</li>
						
						<li><a href="#">
							Support
						</a></li>
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Your Profile</a></li>
								<li><a href="#">Edit Profile</a></li>
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.html">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
						
							
							<li>
								<a href="task.html">
									<i class="menu-icon icon-tasks"></i>
									Tasks
									<b class="label orange pull-right">19</b>
								</a>
							</li>
						</ul><!--/.widget-nav-->

						<!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                                           <li><a href="afficherCtgs.php"><i class="menu-icon icon-book"></i>Categ_Service </a></li>
                                <li><a href="afficherSe.php"><i class="menu-icon icon-paste"></i>Service </a></li>
									<li><a href="statS.php"><i class="menu-icon icon-bar-chart"></i>Stats </a></li>
                    
					
					<li><a href="afficherListeCategories.php"><i class="menu-icon icon-book"></i>Afficher Categorie </a></li>
							
							<li><a href="afficherListeProduits.php"><i class="menu-icon icon-table"></i>Afficher Produits </a></li>
							<li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i> Product Charts </a></li>
							
							<li><a href="afficherlistesujet.php"><i class="menu-icon icon-bar-chart"></i> liste des article </a></li>
							<li><a href="afficheBlog.php"><i class="menu-icon icon-bar-chart"></i> Blog </a></li>
							
							<li><a href="affichercommande.php"><i class="menu-icon icon-bar-chart"></i> liste des commandes </a></li>
							<li><a href="afficherpanier.php"><i class="menu-icon icon-bar-chart"></i> liste des paniers </a></li>
					
							<li><a href="gestionlivraison.php"><i class="menu-icon icon-bar-chart"></i> livraison </a></li>
							<li><a href="gestionlivreur.php"><i class="menu-icon icon-bar-chart"></i> liste des paniers </a></li>
					
					
                            </ul><!--/.widget-nav-->
							
							
							
							<!--/.widget-nav-->

						

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								
							</div>
							<div class="module-body">

									
									<br />
		   
      <!-- Header Inner -->
      <div class="header-inner">
         <div class="container">
            <div class="cat-nav-head">
               <div class="row">
                  <div class="col-12">
                     <div class="menu-area">
                        <!-- Main Menu -->
                        <nav class="navbar navbar-expand-lg">
                           <div class="navbar-collapse">	
                              <div class="nav-inner">	
                                 <ul class="nav main-menu menu navbar-nav">
                                    <li class="active"><a href="affichercommande.php">afficher tous les commandes</a></li>
                                    <li><a href="afficherpanier.php">afficher tous les paniers</a></li>												
                                    
                                 </ul>
                              </div>
                           </div>
                        </nav>
                        <!--/ End Main Menu -->	
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--/ End Header Inner -->
   </header>

   <table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>ID</th>
								<th>mode de payement</th>
								<th class="text-center"> RIB</th>
								<th class="text-center">NUMERO CARTE BANCAIRE </th>
								<th class="text-center">NUMERO CARTE D ETUDIANT </th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>

						<?php
					
						 foreach($listecommande as $row) { ?>
							<tr>
								<td >  <?php echo $row['id_commande'] ?> </td>
								<td >  <?php echo $row['mode'] ?> </td>
								<td >  <?php echo $row['rib']  ?> </td>	
								<td >  <?php echo $row['numero_cb'] ?> </td>
                        <td >  <?php echo $row['numero_ce'] ?> </td>
                        
                        <td class="action" data-title="Remove"><a  href="supprimercommande.php?id=<?php echo $row['id_commande'];?>"><i></i>suprimmer</a></td>
							</tr>
							</tr>
							
							<?php } ?>
						</tbody>
					</table>




    
    
   
   
     
  



 
	<!-- Jquery -->
    <script src="j.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
   
</body>
</html>