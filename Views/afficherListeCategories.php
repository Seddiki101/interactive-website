<?php
include '../Controller/CategorieC.php';
$CategorieC = new CategorieC();
$listeCategories = $CategorieC->affichercategories();
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
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
						</ul>
						<!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
							<li><a href="ajoutCategorie.php"><i class="menu-icon icon-bold"></i> Ajouter Categorie </a></li>
							<li><a href="afficherListeCategories.php"><i class="menu-icon icon-book"></i>Afficher Categorie </a></li>
							<li><a href="form.php"><i class="menu-icon icon-paste"></i>Ajouter Produit</a></li>
							<li><a href="afficherListeProduits.php"><i class="menu-icon icon-table"></i>Afficher Produits </a></li>
							<li><a href="charts.php"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
						</ul>
						<!--/.widget-nav-->

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

					</div>
					<!--/.sidebar-->
				</div>
				<!--/.span3-->


				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">

							</div>
							<div class="module-body">


								<br />



								<button><a href="ajoutCategorie.php">Ajouter une Categorie de produits </a></button>
								<center>
									<h1>Liste des Categories</h1>
								</center>
								<input type="text" id="searchInput" onkeyup="search('tableCategorie')" class="form-control" placeholder="Chercher Un Produit">
								<div class="table-sortable">
								<table border="1" align="center" cellpadding="0" cellspacing="0" border="0" class="table table-sm table-bordered table-sortable table-striped display" id="tableCategorie" width="100%">
									<tr>

										<th>Nom</th>
										<th>Image</th>

										<th>Modifier</th>
										<th>Supprimer</th>
									</tr>
									<?php
									foreach ($listeCategories as $Categorie) {
									?>
										<tr>
											<td><?php echo $Categorie['NomCategorie']; ?></td>
											<td>
												<img src=<?php echo $Categorie['image_cat'] ?>>
											</td>

											<td>
												<form method="POST" action="modifiercategorie.php">
													<input type="submit" name="Modifier" value="Modifier">
													<input type="hidden" value=<?PHP echo $Categorie['Id_cat']; ?> name="Id_cat">
												</form>
											</td>
											<td>
												<a href="supprimercategorie.php?Id_cat=<?php echo $Categorie['Id_cat']; ?>">Supprimer</a>
											</td>
										</tr>
									<?php
									}
									?>
								</table>










							</div>
						</div>



					</div>
					<!--/.content-->
				</div>
				<!--/.span9-->
			</div>
		</div>
		<!--/.container-->
	</div>
	<!--/.wrapper-->

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
<script type="text/javascript">
	//dynamic search function
	function search(tableID) {
		var input, filter, table, tr, td, th, i, txtValue;
		input = document.getElementById("searchInput");
		filter = input.value.toUpperCase();
		table = document.getElementById(tableID);
		tr = table.getElementsByTagName("tr");
		th = table.getElementsByTagName("th");

		for (i = 0; i < tr.length; i++) {
			for (var j = 0; j < th.length; j++) {
				td = tr[i].getElementsByTagName("td")[j];
				if (td) {
					if (td.innerHTML.toUpperCase().indexOf(filter.toUpperCase()) > -1) {
						tr[i].style.display = "";
						break;
					} else {
						tr[i].style.display = "none";
					}
				}
			}
		}
	}
</script>

</html>