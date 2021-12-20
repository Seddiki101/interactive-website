<?php

include_once '../../M/livraison.php';
include_once '../../C/livraisonC.php';
include_once '../../C/livreurC.php';
$livraisonC = new livraisonC();
$livreurC = new livreurC();
$listeC = $livraisonC->afficherLivraison();
$listeL =  $livreurC->afficherLivreur();

if (
    isset($_POST["adresse"]) && 
     isset($_POST["dateL"]) && 
    isset($_POST["prix"]) &&
    isset($_POST["livreur"]) 
) {
    if (
        !empty($_POST["adresse"]) && 
        !empty($_POST["dateL"]) && 
        !empty($_POST["prix"]) &&
        !empty($_POST["livreur"]) 
    ) {
        if(intval($_POST['prix'])<0)
        {
            echo "<script>alert('Le prix doit etre positif')</script>";
        }
        $livraison = new livraison(
            $_POST['adresse'],
            $_POST['dateL'],
            $_POST['prix'],
            $_POST['livreur']
        );
        $livraisonC->ajouterLivraison($livraison);
        
        header('Location:gestionlivraison.php');
    }
    else
        $error = "Missing information";
}
if (isset($_POST["join"]))
{
    $listeC = $livraisonC->afficherLivraisonJoin();
}

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
			  		Edmin
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Drops <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#">Separated link</a></li>
								<li><a href="#">One more separated link</a></li>
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
							<div class="left">

								</div>

								<div class="right">

								<form method="POST" action="gestionlivraison.php">
             <input type="submit" value="reset" >
             <input type="submit" value="Voir en details" name="join"> <label>search accounts</label>
              <input type="text" class="field small-field" name="rech"/>
              <select name="selon" class="field small-field" >
      
<!--/.widget-nav-->
                            
                            
                          
              
            </select>
                            </div>
              <input type="submit" class="button" value="search" name="search" /></form>
							</div>
							<div class="module-body">
							<div class="table">
          
		  <table width="100%" border="0" cellspacing="0" cellpadding="0" >
	  
	  
	  
			<tr>
			 
			  <th>idL</th>
			  <th>Adresse</th>
		  
			  <th>dateL</th>
			  <th>prix</th>
			  <th>livreur</th>
			  <?php if (isset($_POST["join"]))
{
echo "<th>idLivreur</th>";
echo "<th>typeLivreur</th>";
echo "<th>NumtelLivreur</th>";
} ?>
			
			 
			</tr>

			

			<?php
  foreach($listeC as $livraison){
	  ?>


			<tr>
			  <td><?php echo $livraison['idL']; ?></td>
			  <td><?php echo $livraison['adresse']; ?></td>
			   
			  <td><?php echo $livraison['dateL']; ?></td>
			  <td><?php echo $livraison['prix']; ?></td>
			  <td><?php echo $livraison['livreur']; ?></td>
			  <?php if (isset($_POST["join"]))
{
echo "<td>";echo $livraison['id'];echo"</td>";
echo "<td>";echo $livraison['type'];echo"</td>";
echo "<td>";echo $livraison['numtel'];echo"</td>";
} ?>
			 
			  <td><a href="supprimerLivraison.php?id=<?php echo $livraison['idL']; ?>" class="ico del">Delete</a> </td>
			  <td> <a href="modifierLivraison.php?id=<?php echo $livraison['idL']; ?>" class="ico edit">Edit</a>
			 
			
			
			
			</td>
			</tr>
			<?php } ?>
			
			
			
			
			
			
		  
		 
		  </table>
		  <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Product</h2>
          </div>
          <!-- End Box Head -->
          <form action="#" method="post">
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Adresse </label>
                <input type="text" class="field size1" name="adresse" id="adresse"/>
              </p>
              <p> 
                <label>dateL </label>
                <input type="date" class="field size1" name="dateL" id="dateL"/>
              </p>


              <p> 
                <label>Prix </label>
                <input type="number" class="field size1" name="prix" id="prix" />
              </p>
          
              <label for="livreur-select">Livreur</label>

<select name="livreur" id="livreur-select">
    <?php foreach($listeL as $livraison){ ?>
    <option value="<?php echo  $livraison['nom'];?>"><?php echo  $livraison['nom'];?></option>
    <?php } ?>
</select>

            </div>
            <!-- End Form -->
			<div id="piechart"> </div>
  

  <?php 
  include_once "../../C/livraisonC.php";
  $livC = new livraisonC();
  
  $listeC = $livC->statistiques();
   ?>
  
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  // Load google charts
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  
  // Draw the chart and set the chart values
  function drawChart() {
	  
	var data = google.visualization.arrayToDataTable([
	 
	[ 'livreurs', 'nombre'],
	
  
	<?php
	foreach($listeC as $k){
	 echo "["; echo "'";echo $k['livreur'];echo"'";echo",";echo $k['count(*)'];echo"],";}?>
  
  
	
  
	
  ]);
  
	// Optional; add a title and set the width and height of the chart
	var options = {'title':'ROLES', 'width':750, 'height':400};
  
	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	chart.draw(data, options);
  }
  </script>
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" onclick="verif();"/>
            </div>
            <!-- End Form Buttons -->
          </form>
        </div>

								
                                              
                                                
                                                
                                               

                                               

                              
								
							</div><!--/.module-body-->
						</div><!--/.module-->
						
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