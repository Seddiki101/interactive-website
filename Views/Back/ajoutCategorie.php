<?php
require_once 'C:\\xampp\htdocs\ncix\config.php';
require_once 'C:\\xampp\htdocs\ncix\Model\Categorie.php';
require_once 'C:\\xampp\htdocs\ncix\Controller\CategorieC.php';


$error = "";

// create categorie
$Categorie = null;
$nom = $_POST["NomCategorie"] ?? "";
// create an instance of the controller
$CategorieC = new CategorieC();
if (

    isset($_POST["NomCategorie"]) &&
    isset($_POST["image_cat"])
) {
    if (
        ctype_alpha($nom) &&
        !empty($_POST["NomCategorie"]) &&
        !empty($_POST["image_cat"])
    ) {
        $image = $_FILES['img']['name'];
        $ext = pathinfo($image, PATHINFO_EXTENSION);

        //name of my image in my DataBase

        $newname = rand() . time() . '.' . $ext;

        move_uploaded_file($_FILES['img']['tmp_name'], 'C://xampp/htdocs/ncix/assets/images/' . $newname);
        if ($ext != "PNG" && $ext != "png" && $ext != "jpg" && $ext != "JPG") {
            echo '<script>
                alert("Seulement les formats PNG et JPG sont acceptés");
            </script>';
        } else {
            $Categorie = new Categorie(
                $_POST['NomCategorie'],
                $newname
            );
            $CategorieC->ajoutercategorie($Categorie);
            header('Location:afficherListeCategories.php');
        }
    } else
        $error = "Missing information or invalid name";
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
                        </ul>/.widget-nav

                        <ul class="widget widget-menu unstyled">
                            <li><a href="ajoutCategorie.php"><i class="menu-icon icon-bold"></i> Ajouter Categorie</a></li>
                            <li><a href="afficherListeCategories.php"><i class="menu-icon icon-book"></i>Afficher Categories </a></li>
                            <li><a href="form.php"><i class="menu-icon icon-paste"></i>Ajouter produit </a></li>
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
                                <h3>Ajouter une categorie</h3>
                            </div>

                            <button><a href="afficherListeCategories.php">Retour à la liste des categories</a></button>
                            <hr>

                            <div id="error">
                                <?php echo $error; ?>
                            </div>

                            <form action="" method="POST">
                                <table border="0" align="center class=" table table-striped">

                                    <tr>
                                        <td>
                                            <label for="NomCategorie">NomCategorie:
                                            </label>
                                        </td>
                                        <td><input type="text" name="NomCategorie" id="NomCategorie" maxlength="20"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label for="image_cat">image_cat:
                                            </label>
                                        </td>
                                        <td><input class="btn btn-primary btn-block" required id="img" type="file" name="img" accept="*/image"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input type="submit" value="Envoyer">
                                        </td>
                                        <td>
                                            <input type="reset" value="Annuler">
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
</body>

</html>
<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>

</html>
</body>