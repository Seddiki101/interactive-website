<?php

require_once 'C:\\xampp\htdocs\ncix\config.php';
require_once 'C:\\xampp\htdocs\ncix\Model\Produit.php';
require_once 'C:\\xampp\htdocs\ncix\Controller\ProduitC.php';

require_once 'C:\\xampp\htdocs\ncix\Model\Categorie.php';
require_once 'C:\\xampp\htdocs\ncix\Controller\CategorieC.php';


$error = "";

// create a product
$Produit = null;

// create an instance of the controller
$ProduitC = new ProduitC();
$CatC = new CategorieC();
$listeC = $CatC->affichercategories();

if (isset($_POST['NumProduit']) && isset($_POST['Nomproduit']) && isset($_POST['Marque']) && isset($_POST['Prix']) && isset($_POST['Prod_desc']) && isset($_POST['Qte_stock']) && isset($_POST['Id_cat'])&& isset($_POST['image_prod'])){
    $newname=$_POST['image_prod'];
    $Produit = new Produit($_POST['Nomproduit'],$_POST['Marque'],$_POST['Prix'],$_POST['Prod_desc'],$_POST['Qte_stock'],$_POST['Id_cat'],$_POST['Id_cat'],$newname);
    
    $ProduitC->modifierproduit($Produit,$_POST['NumProduit']);
    header('Location:afficherListeProduits.php');

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
                                <button><a href="afficherListeProduits.php">Retour à la liste des produits</a></button>
                                <hr>

                                <div id="error">
                                    <?php echo $error; ?>
                                </div>

                                <?php
                                if (isset($_POST['NumProduit'])) {
                                    $Produit = $ProduitC->recupererproduit($_POST['NumProduit']);

                                ?>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                        <table border="0" class="table table-striped" align="center">
                                            <tr>
                                                <td>
                                                    <label for="NumProduit">NumProduit:
                                                    </label>
                                                </td>
                                                <td><input type="text" name="NumProduit" id="NumProduit" value="<?php echo $Produit['NumProduit']; ?>" maxlength="20"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Nomproduit">Nomproduit:
                                                    </label>
                                                </td>
                                                <td><input type="text" name="Nomproduit" id="Nomproduit" value="<?php echo $Produit['Nomproduit']; ?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Marque">Marque:
                                                    </label>
                                                </td>
                                                <td><input type="text" name="Marque" id="Marque" value="<?php echo $Produit['Marque']; ?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Prix">Prix:
                                                    </label>
                                                </td>
                                                <td>
                                                    <input type="text" name="Prix" value="<?php echo $Produit['Prix']; ?>" id="Prix" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Prod_desc">Prod_desc:
                                                    </label>
                                                </td>
                                                <td>
                                                    <textarea name="Prod_desc" id="Prod_desc" placeholder="<?php echo $Produit['Prod_desc']; ?>" value="<?php echo $Produit['Prod_desc']; ?>" required></textarea>


                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Qte_stock">Qte_stock:
                                                    </label>
                                                </td>
                                                <td><input type="number" name="Qte_stock" id="Qte_stock" value="<?php echo $Produit['Qte_stock']; ?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="Id_cat">Categorie:
                                                    </label>
                                                </td>
                                                <td>
                                                    <!--<input type="text" name="Id_cat" id="Id_cat" value="<?php echo $service['Id_cat']; ?>"> -->
                                                    <select id="Id_cat" name="Id_cat">
                                                        <?php foreach ($listeC as $Cat) { ?>
                                                            <option value="<?php echo $Cat['Id_cat']; ?>"> <?php echo $Cat['NomCategorie']; ?>
                                                            <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="likes">Likes:
                                                    </label>
                                                </td>
                                                <td><input type="text" name="likes" id="likes" value="<?php echo $Produit['Likes']; ?>" disabled></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="image_prod">Image_prod:
                                                    </label>
                                                </td>
                                                <td>

                                                <td>
                                                    <img src=" ../../assets/images/<?PHP echo $Produit['image_prod']; ?>" class="product-img">
                                                    <input hidden id="image_prod" name="image_prod" value="<?php echo $Produit['image_prod']; ?>">
                                                </td>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="submit" value="Modifier">
                                                </td>
                                                <td>
                                                    <input type="reset" value="Annuler">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                <?php
                                }
                                ?>


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
</option>
</select>
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
</div>
</body>

</html>