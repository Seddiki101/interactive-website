<?php
    include_once 'B:\apps\xampp\htdocs\integra\M\CS.php';
    include_once 'B:\apps\xampp\htdocs\integra\C\CSC.php';

    $error = "";

    // create
    $service = null;

    // create an instance of the controller
    $serviceC = new ServiceC();
	$catC = new CategorieSerC();
	$listCat = $catC->afficherCat_ser();
    if (
        isset($_POST["IDs"]) &&
		isset($_POST["nom_ser"]) &&		
        isset($_POST["image_ser"]) &&
		isset($_POST["frais"]) && 
        isset($_POST["Description"]) && 
        isset($_POST["ID_cs"])
    ) {
        if (
            !empty($_POST["IDs"]) && 
			!empty($_POST['nom_ser']) &&
            !empty($_POST["image_ser"]) && 
			!empty($_POST["frais"]) && 
            !empty($_POST["Description"]) && 
            !empty($_POST["ID_cs"])
        ) {
            $service = new Service(
				$_POST['nom_ser'],
                $_POST['image_ser'], 
				$_POST['frais'],
                $_POST['Description'],
                $_POST['ID_cs']
            );
			/*$service->setIDs($_POST['IDs']);
			$service->setNomser($_POST['nom_ser']);
			$service->setImageser($_POST['image_ser']);
			$service->setFrais($_POST['frais']);
			$service->setDesc($_POST['Description']);
			$service->setIDcs($_POST['ID_cs']);*/
            $serviceC->modifierservice($service, $_POST["IDs"]);
            header('Location:afficherSe.php');
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
	<title>Modifier</title>
	<script type="text/javascript" src="ckeditor\ckeditor.js"></script>
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








<button><a href="afficherSe.php">Retour à la liste des services</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['IDs'])){
				$service = $serviceC->recupererservice($_POST['IDs']);
				
		?>
        
        <form action="" method="POST">
            <table border="0" class="table table-striped" align="center">
                <tr>
                    <td>
                        <label for="IDs">ID:
                        </label>
                    </td>
                    <td><input type="text" name="IDs" id="IDs" value="<?php echo $service['IDs']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="nom_ser">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom_ser" id="nom_ser" value="<?php echo $service['nom_ser']; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="image_ser">Image_ser:
                        </label>
                    </td>
                    <td><input type="text" name="image_ser" id="image_ser" value="<?php echo $service['image_ser']; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="frais">Frais:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="frais" value="<?php echo $service['frais']; ?>" id="frais">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                      
					  
					  
					    
					  <textarea class="ckeditor" name="Description" id="Description" placeholder="<?php echo $service['Description']; ?>"></textarea>
                    
					<script>
        ClassicEditor
            .create( document.querySelector( '#Description' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
					  
					  
		<script> document.getElementById('Description').value = editor.getData(); </script>							  
					  
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="ID_cs">ID_cs:
                        </label>
                    </td>
                    <td>
                        <!--<input type="text" name="ID_cs" id="ID_cs" value="<?php echo $service['ID_cs']; ?>"> -->
						<select id="ID_cs" name="ID_cs">
						<?php foreach ($listCat as $cat){ ?>
							<option value="<?php echo $cat['ID_cs']; ?>"> <?php echo $cat['nom_cs']; ?>
						<?php } ?>
						</select>
                    </td>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>





								



								
						




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