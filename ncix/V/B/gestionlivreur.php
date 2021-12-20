
<?php

include_once '../../M/livreur.php';
include_once '../../C/livreurC.php';
$livreurC = new livreurC();
$listeC = $livreurC->afficherLivreur();


if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) && 
     isset($_POST["type"]) && 
    isset($_POST["numtel"])
) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) && 
        !empty($_POST["type"]) && 
        !empty($_POST["numtel"]) 
    ) {
        if(!(strlen($_POST['numtel'])!=8 || strlen($_POST['nom'])>15 || strlen($_POST['prenom'])>15 || strlen($_POST['email'])>50 || strlen($_POST['type'])>15))
        {
            
        
        
        $livreur = new livreur(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['type'],
            $_POST['numtel']
        );
        $livreurC->ajouterLivreur($livreur);
        mail(
          $_POST['email'],
          "Bienvenue",
          "Bienvenue monsieur ".$_POST['nom']." ".$_POST['prenom']." dans notre site"
          
        );
        header('Location:gestionlivreur.php');
    }
    }
    else
        $error = "Missing information";
}
if (isset($_POST["tri"]))
{
    $listeC = $livreurC->afficherLivreurTrie($_POST["tri"]);
}
if (isset($_POST["rech"]))
{
    $listeC = $livreurC->afficherLivreurRech($_POST["rech"],$_POST["selon"]);
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

<!--/.widget-nav-->
                            
                            
                          

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

						

					
					</div><!--/.sidebar-->
				</div><!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
							<div class="left">

								
								</div>
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
   
    <!-- End Small Nav -->
    <!-- Message OK -->
    
    <!-- End Message OK -->
    <!-- Message Error -->
    
    <!-- End Message Error -->
    <br />
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        <!-- Box -->
       
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Accounts</h2>
            <div class="right">
             <form method="POST" action="gestionlivreur.php">
              <input type="text" class="field small-field" name="rech"/>
              <select name="selon" class="field small-field" >
             
              <option value="id">ID</option>
    <option value="nom">Nom</option>
    <option value="type">Type</option>
            </select>
              <input type="submit" class="button" value="search" name="search" /></form>
            </div>
          </div>
          
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
          
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
        
              <tr>
               
                <th>id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Type</th>
                <th>Numtel</th>
                
              
               
              </tr>

              

              <?php
    foreach($listeC as $livreur){
        ?>


              <tr>
                <td><?php echo $livreur['id']; ?></td>
                <td><?php echo $livreur['nom']; ?></td>
                <td><?php echo $livreur['prenom']; ?></td>
                <td><?php echo $livreur['email']; ?></td> 
                <td><?php echo $livreur['type']; ?></td>
                <td><?php echo $livreur['numtel']; ?></td>
               
               
                <td><a href="supprimerLivreur.php?id=<?php echo $livreur['id']; ?>" class="ico del">Delete</a> </td>
                <td> <a href="modifierLivreur.php?id=<?php echo $livreur['id']; ?>" class="ico edit">Edit</a>
               
              
              
              
              </td>
              </tr>
              <?php } ?>
              
              
              
              
              
              
            
           
            </table>
            <!-- End Pagging -->
          </div>
          <!-- Table -->
      
        <!-- End Box -->
        <!-- Box -->
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
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" id="nom"/>
              </p>
              <p> 
                <label>Prenom </label>
                <input type="text" class="field size1" name="prenom" id="prenom"/>
              </p>
              <p> 
                <label>Email </label>
                <input type="text" class="field size1" name="email" id="email"/>
              </p>
              <p> 
                <label>type </label>
                <input type="text" class="field size1" name="type" id="type"/>
              </p>


              <p> 
                <label>Numtel </label>
                <input type="number" class="field size1" name="numtel" id="numtel" />
              </p>
          
              

            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" onclick="verif();"/>
            </div>
            <!-- End Form Buttons -->
          </form>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Management</h2>
          </div>
          <!-- End Box Head-->
          <div class="box-content"> <a href="#" class="add-button"><span>Add new Article</span></a>
            <div class="cl">&nbsp;</div>
            <p class="select-all">
              <input type="checkbox" class="checkbox" />
              <label>select all</label>
            </p>
            <p><a href="#">Delete Selected</a></p>
            <!-- Sort -->
            <div class="sort">
              <form method="POST"><label>Sort by</label>
              <select name="tri" class="field" >
              
                <option value="id">ID</option>
                <option value="nom">Nom</option>
                <option value="type">Type</option>
                
              </select><input type="submit"  value="trier"></form>
              
            </div>
            <!-- End Sort -->
          </div>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
    <div id="piechart"> </div>
    <!-- Main -->
  </div>
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
<script>
    function verif() {

var nom=document.getElementById('nom').value;
var prenom=document.getElementById('prenom').value;
var email=document.getElementById('email').value;
var type=document.getElementById('type').value;
var numtel=document.getElementById('numtel').value;

if (nom.length === 0 || prenom.length === 0 ||  type.length === 0 || numtel.length===0) {
    alert("Vérifier vos donneés ");
}
else {

if (nom.length >15)
{
    alert("Votre nom doit avoir une longueur inférieur à 15 caractères");
}
else {

if (prenom.length >15)
{
    alert("Votre prenom doit avoir une longueur inférieur à 15 caractères");
}
else {

if (type.length >15)
{
    alert("Votre type doit avoir une longueur inférieur à 15 caractères");
}

else{

if (numtel.length!=8)
{
    alert("Votre numtel dot s'ecrire sur 8 chiffres");
}


}
}
}














}
</script>