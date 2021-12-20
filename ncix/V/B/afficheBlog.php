<?php
	include 'B:\apps\xampp\htdocs\ncix\C\blogC.php';

    $blogc=  new blogC();
    
    if(isset($_POST['suprimer']) && isset($_GET['idComment'])){ 
        $blogc->supprimerblog($_GET['idComment']);
    }

    if(isset($_GET['id'])){
        $list = $blogc->sujetjoin($_GET['id']);
        $count = count($list);
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
                <!--/.span3-->
                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    DataTables</h3>
                            </div>
                            <div class="module-body table">
                                <table cellpadding="0" cellspacing="0" border="0"
                                    class="datatable-1 table table-bordered table-striped	 display" width="100%">
                                    <thead>
                                        <tr>
                                            <th>
                                                ID Comment
                                            </th>
                                            <th>
                                                Nom
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Comment
                                            </th>
                                            <th>
                                                Delete
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < $count; $i++) { ?>



                                        <tr class="odd gradeX">
                                            <td>
                                                <?php echo $list[$i]['id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $list[$i]['nom']; ?>
                                            </td>
                                            <td>
                                                <?php echo $list[$i]['email']; ?>
                                            </td>
                                            <td class="center">
                                                <?php echo $list[$i]['comment']; ?>
                                            </td>
                                            <td>
                                                <form method="POST"
                                                    action="afficheBlog.php?idComment=<?php echo $list[$i]['id']; ?>&id=<?php echo $list[$i]['id_sujet']; ?>">
                                                    <button type="submit" name="suprimer" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>

                                        </tr>

                                        <?php } ?>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                ID Comment
                                            </th>
                                            <th>
                                                Nom
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Comment
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <!--/.module-->
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

    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="scripts/common.js" type="text/javascript"></script>

</body>