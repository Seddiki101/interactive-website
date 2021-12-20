<?php 
require_once "..\..\C\config.php";
require_once "..\..\C\sujetc.php";
//require_once "..\..\M\sujet.php";



if(isset($_POST['save'])&& !empty($_POST['titresujet']) && !empty($_POST['contenu']) && !empty($_POST['image']))
{  
    $pdo = config::getConnexion();
    $query = $pdo->prepare('SELECT COUNT(*) FROM sujet WHERE titresujet = ?');
    $query->execute(array($_POST['titresujet']));

    $sujet = new sujet(
    
        $_POST['titresujet'] ,
        $_POST['contenu'] ,
        $_POST['image']
           );
        $sujetc=new sujetc();
        $sujetc->ajoutersujet($sujet);
        

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
<script type="text/javascript" src="ckeditor\ckeditor.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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





					<form class="navbar-search pull-left input-append" action="afficherSearch.php" method="POST">
						<input class="span3" type="text" id="search" name="search" >
						<button class="btn" id="searchButton" name="searchButton" type = "submit ">
							<i class="icon-search"></i>
						</button>
					</form>
				
					<ul class="nav pull-right">
						
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
					
					
					
                            </ul>
							
							
							<!--/.widget-nav-->

						

					</div><!--/.sidebar-->
				</div><!--/.span3-->



	<div class="wrapper">
		<div class="container">
			<div class="row" style="flex-wrap: nowrap;">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="index.php">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
							<li>
								<a href="addSujet.php">
									<i class="menu-icon icon-bullhorn"></i>
									Add Blog
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
                                <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                                <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                                <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                                <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                                <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
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
									<li>
										<a href="other-faq.html">
											<i class="icon-inbox"></i>
											Frequently Asked Questions
										</a>
									</li>
									<li>
										<a href="other-404.html">
											<i class="icon-inbox"></i>
											Error Page (404)
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
								<h3>Add Blog</h3>
							</div>
							<form class="form-add" action="addSujet.php" method="POST">
								<div class="form-group">
								  <label for="titresujet" class="form-label">Title</label>
								  <input type="text" class=" trol input-style" id="titresujet" name="titresujet" placeholder="Title">
								</div>
								
								<div class="form-group">
								  <label for="contenu" class="form-label">Blog text</label>
								 
                                  <textarea class="ckeditor" name="contenu" id="contenu" ></textarea>
                    
					
					
					<script>
        ClassicEditor
            .create( document.querySelector( '#contenu' ) )
            .catch( error => {
                console.error( error );
            } );
    
	</script>
					
		<script> document.getElementById('contenu').value = editor.getData(); </script>













								</div>

								<div class="form-group">
									<label for="image" class="form-label">Image</label>
									<input type="file" class="form-control input-style" id="image"  name="image"/>
								</div>
								<div>
								<input type="submit" name="save" value="submit" class="btn btn-primary waves-effect m-r-15"/>
								</div>
							  </form>
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
</body>