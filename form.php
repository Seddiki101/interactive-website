<?php
    include_once '../Model/Produit.php';
    include_once '../Controller/ProduitC.php';


    $error = "";

    // create produit
    $Produit = null;
   
    // create an instance of the controller
    $ProduitC = new ProduitC();
    if (
     
		isset($_POST["Nomproduit"]) &&		
        isset($_POST["Marque"]) &&
		isset($_POST["Prix"]) && 
        isset($_POST["Description"]) && 
        isset($_POST["Qte_stock"]) && 
        isset($_POST["Id_cat"])
    ) {
        if (
         
			!empty($_POST["Nomproduit"]) &&
            !empty($_POST["Marque"]) && 
			!empty($_POST["Prix"]) && 
            !empty($_POST["Description"]) && 
            !empty($_POST["Qte_stock"]) && 
            !empty($_POST["Id_cat"])
        ) {
            $Produit = new Produit(
             
				$_POST['Nomproduit'],
                $_POST['Marque'], 
				$_POST['Prix'],
                $_POST['Description'],
                $_POST['Qte_stock'],
                $_POST['Id_cat']
            );  
             var_dump($Produit);
            $ProduitC->ajouterproduit($Produit);
         //   header('Location:afficherListeProduits.php');
        }
        else
            $error = "Missing information";
    }

    
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
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
			  		Admin
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

					<form class="navbar-search pull-left input-append" action="#">
						<input type="text" class="span3">
						<button class="btn" type="button">
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
                                <li><a href="ajoutCategorie.php"><i class="menu-icon icon-bold"></i> Ajouter Categorie </a></li>
                                <li><a href="afficherListeCategories.php"><i class="menu-icon icon-book"></i>Afficher Categorie </a></li>
                                <li><a href="form.php"><i class="menu-icon icon-paste"></i>Ajouter Produit </a></li>
                                <li><a href="afficherListeProduits.php"><i class="menu-icon icon-table"></i>Afficher Produits </a></li>
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
								<h3>Ajouter un produit</h3>
							</div>
						

									


        <button><a href="afficherListeProduits.php">Retour à la liste des Produits</a></button>
        <hr>
        
       
        
        <form action="" method="POST">
            <table border="1" align="center">
                
				<tr>
                    <td>
                        <label for="Nomproduit">Nomproduit:
                        </label>
                    </td>
                    <td><input type="text" name="Nomproduit" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Marque">Marque:
                        </label>
                    </td>
                    <td><input type="text" name="Marque" id="Marque" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Prix" id="Prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="Description" name="Description" id="Description">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Qte_stock">Qte_stock:
                        </label>
                    </td>
                    <td>
                        <input type="Qte_stock" name="Qte_stock" id="Qte_stock" >
                    </td>
                </tr>  
                 <tr>
                    <td>
                        <label for="Id_cat">Id_cat:
                        </label>
                    </td>
                    <td>
                        <input type="Id_cat" name="Id_cat" id="Id_cat" >
                    </td>
                </tr>                          
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    
   </body>
</html>
	<!--<div class="footer">
		<div class="container">
			 

			
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>