<?php
include_once '../Controller/ProduitC.php';
include_once '../Controller/CategorieC.php';
$ProduitC = new ProduitC();
$CategorieC = new CategorieC();
$listeProduits = $ProduitC->afficherproduits();
$listeCategorie = $CategorieC->affichercategories();


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
					<div class="card mb-4">
						<div class="card-header">
							<i class="fas fa-table mr-1"></i>
							<br />
							<button><a href="form.php">Ajouter un produit </a></button>
							<center>
								<h1>Liste des Produits</h1>
							</center>
							<input type="text" id="searchInput" onkeyup="search('tableProduits')" class="form-control" placeholder="Chercher Un Produit">
							<form action="afficherListeProduitsFiltered.php" method="POST">
								<select name="categorie" value='' id='filterCategorie'>Categorie</option>
									<?php
									foreach ($listeCategorie as $Categorie) {
										echo "<option value=$Categorie[Id_cat]>$Categorie[NomCategorie]</option>";
									}
									echo "</select>";
									?>
									<input type="submit" class="button" value="Filter">
							</form>

							<div class="card-body">
								<div class="table-responsive">
									<table border="1" align="center" cellpadding="0" cellspacing="0" border="0" class="table table-sm table-bordered table-striped display" id="tableProduits" width="100%">
										<thead>
											<tr>
												<th onclick="sortTable(0)">Nomproduit</th>
												<th onclick="sortTable(1)">Marque</th>
												<th onclick="sortTable(2)">Prix</th>
												<th onclick="sortTable(3)">Prod_desc</th>
												<th onclick="sortTable(4)">Qte_stock</th>
												<th onclick="sortTable(5)">Categorie</th>
												<th onclick="sortTable(6)">Likes</th>
												<th>image_prod</th>
												<th>Modifier</th>
												<th>Supprimer</th>
											</tr>
											<?php
											foreach ($listeProduits as $Produit) {
											?>
												<tr>
													<td><?php echo $Produit['Nomproduit']; ?></td>
													<td><?php echo $Produit['Marque']; ?></td>
													<td><?php echo $Produit['Prix']; ?></td>
													<td><?php echo $Produit['Prod_desc']; ?></td>
													<td><?php echo $Produit['Qte_stock']; ?></td>
													<td><?php echo $Produit['NomCategorie']; ?></td>
													<td><?php echo $Produit['Likes']; ?></td>
													<td>
													<img src="../Views/assets/img/<?PHP echo $Produit['image_prod']; ?>" class="product-img">
													</td>
													<td>
														<form method="POST" action="modifierproduit.php">
															<input type="submit" name="Modifier" value="Modifier">
															<input type="hidden" value=<?PHP echo $Produit['NumProduit']; ?> name="NumProduit">
														</form>
													</td>
													<td>
														<a href="supprimerproduit.php?NumProduit=<?php echo $Produit['NumProduit']; ?>">Supprimer</a>
													</td>
												</tr>
											<?php
											}
											?>
										</thead>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
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

	function sortTable(n) {
		var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
		table = document.getElementById("tableProduits");
		switching = true;
		// Set the sorting direction to ascending:
		dir = "asc";
		/* Make a loop that will continue until
		no switching has been done: */
		while (switching) {
			// Start by saying: no switching is done:
			switching = false;
			rows = table.rows;
			/* Loop through all table rows (except the
			first, which contains table headers): */
			for (i = 1; i < (rows.length - 1); i++) {
				// Start by saying there should be no switching:
				shouldSwitch = false;
				/* Get the two elements you want to compare,
				one from current row and one from the next: */
				x = rows[i].getElementsByTagName("TD")[n];
				y = rows[i + 1].getElementsByTagName("TD")[n];
				/* Check if the two rows should switch place,
				based on the direction, asc or desc: */
				var cmpX = isNaN(parseInt(x.innerHTML)) ? x.innerHTML.toLowerCase() : parseInt(x.innerHTML);
				var cmpY = isNaN(parseInt(y.innerHTML)) ? y.innerHTML.toLowerCase() : parseInt(y.innerHTML);
				cmpX = (cmpX == '-') ? 0 : cmpX;
				cmpY = (cmpY == '-') ? 0 : cmpY;
				if (dir == "asc") {
					if (cmpX > cmpY) {
						// If so, mark as a switch and break the loop:
						shouldSwitch = true;
						break;
					}
				} else if (dir == "desc") {
					if (cmpX < cmpY) {
						// If so, mark as a switch and break the loop:
						shouldSwitch = true;
						break;
					}
				}
			}
			if (shouldSwitch) {
				/* If a switch has been marked, make the switch
				and mark that a switch has been done: */
				rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
				switching = true;
				// Each time a switch is done, increase this count by 1:
				switchcount++;
			} else {
				/* If no switching has been done AND the direction is "asc",
				set the direction to "desc" and run the while loop again. */
				if (switchcount == 0 && dir == "asc") {
					dir = "desc";
					switching = true;
				}
			}
		}
	}
</script>

</html>








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

<!---<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>