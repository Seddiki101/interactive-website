<?php
	include 'B:\apps\xampp\htdocs\ncix\C\CSC.php';
	$serviceC=new ServiceC();
	 //$listeService=$serviceC->afficherservice();
     //$listeService=$serviceC->sortByDate();
	 $listeService=$serviceC->sortByPrice();
	 
	 
if(isset($_POST['searchButton']) && isset($_POST['search'])){	 

	$listesujet= $serviceC->findservicebyname($_POST['search']);
	unset($_POST['search']);
	var_dump($listesujet);
	 $listesujet=$serviceC->sortByDateDesc();
}



?>	 
	 
	 
	 
	 


<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Service</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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





					<form class="navbar-search pull-left input-append" action="" method="POST">
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
								<a href="activity.html">
									<i class="menu-icon icon-bullhorn"></i>
									News Feed
								</a>
							</li>
							<li>
								<a href="message.html">
									<i class="menu-icon icon-inbox"></i>
									Inbox
									<b class="label green pull-right">11</b>
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

						<ul class="widget widget-menu unstyled">
                                <li><a href="afficherCtgs.php"><i class="menu-icon icon-book"></i>Categ_Service </a></li>
                                <li><a href="afficherSe.php"><i class="menu-icon icon-paste"></i>Service </a></li>
								
								
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li>
								<a class="collapsed" data-toggle="collapse" href="#togglePages">
									<i class="menu-icon icon-cog"></i>
									<i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right"></i>
									More Pages
								</a>
								<ul id="togglePages" class="collapse unstyled">
									<li>
										<a href="other-login.html">
											<i class="icon-inbox"></i>
											Login
										</a>
									</li>
									<li>
										<a href="other-user-profile.html">
											<i class="icon-inbox"></i>
											Profile
										</a>
									</li>
									<li>
										<a href="other-user-listing.html">
											<i class="icon-inbox"></i>
											All Users
										</a>
									</li>
								</ul>
							</li>
							
							<li>
								<a href="#">
									<i class="menu-icon icon-signout"></i>
									Logout
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								
							</div>
							<div class="module-body">

									
									<br />

<div class="btn-box-row row-fluid">


<a href="ajouterSe.php" class="btn-box small span3">
									<i class="icon-edit"></i>
									<b>ajouter service</b>
								</a>
								
								
<a href="afficherSeDate.php" class="btn-box small span2">								
<i class="icon-screenshot"></i>		
<b>sort by date</b>						
		</a>						


<a href="afficherSeDateDesc.php" class="btn-box small span2">								
<i class="icon-screenshot"></i>		
<b>sort by date desc</b>						
		</a>						

<a href="afficherSePrice.php" class="btn-box small span2">								
<i class="icon-screenshot"></i>		
<b>sort by price</b>						
		</a>

<a href="afficherSePriceDesc.php" class="btn-box small span2">								
<i class="icon-screenshot"></i>		
<b>sort by price desc</b>						
		</a>								
								
</div>



		<center><h1>Liste des services</h1></center>
		<table border="1" align="center" cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
			<tr>
				
				<th>Nom</th>
				<th>image</th>
				<th>frais</th>
				<th>Description</th>
				<th>Date de creation</th>
				
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeService as $service){
			?>
			<tr>
				
			    <td><?php echo $service['nom_ser']; ?></td>
				
				<td> <img src="i/<?php echo $service['image_ser']; ?> "> </td>
				
				<td><?php echo $service['frais']; ?></td>
				
				
				<td><?php echo $service['Description']; ?></td>
				
					<td><?php echo $service['date_s']; ?></td>
				
				<td>
					<form method="POST" action="modifierSe.php" class="btn btn-info">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $service['IDs']; ?> name="IDs">
					</form>
				</td>
				<td>
					<a href="supprimerSe.php?IDs=<?php echo $service['IDs']; ?>" class="btn btn-danger">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>





									
								



									</form>
						




							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>