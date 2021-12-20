<?php

require_once '../../C/UtilisateurC.php';
require_once '../../M/Utilisateur.php';
require_once '../../C/RoleC.php';
require_once '../../M/Role.php';

session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location:../front/signin.php');
}
$roleC = new RoleC();
$roles = $roleC->afficherroles();


if (isset($_POST['ajouter']) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"])  && isset($_POST["pass"]) && isset($_POST["role"])) {
    if (!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"])  && !empty($_POST["pass"]) && !empty($_POST["role"])) {
        $user = new Utilisateur(
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email'],
            $_POST['pass'],
            $_POST['role'],
            'user.png'
        );
        $userC = new UtilisateurC();
        $userC->ajouterUtilisateur($user);
    }
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    </head>

    <script>
       

        function verif() {
            if (f1.nom.value.length == 0 || f1.prenom.value.length==0 ) {
                document.getElementById('message').innerHTML = "remplir tout les champ";
                return false;

            }
            if(f1.pass.value.length <8){
                document.getElementById('message').innerHTML = "mot de passe doit contenir au moin 8 caratctére";
                return false;
            }
            

            document.getElementById("f").submit();

            return true;

        }
    </script>

<body>

    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Edmin </a>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav nav-icons">
                        <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                        <li><a href="#"><i class="icon-eye-open"></i></a></li>
                        <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                    </ul>
                    <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                    </form>
                    <ul class="nav pull-right">
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Item No. 1</a></li>
                                <li><a href="#">Don't Click</a></li>
                                <li class="divider"></li>
                                <li class="nav-header">Example Header</li>
                                <li><a href="#">A Separated link</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Support </a></li>
                        <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Your Profile</a></li>
                                <li><a href="#">Edit Profile</a></li>
                                <li><a href="#">Account Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="../../controller/deconnection.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.nav-collapse -->
            </div>
        </div>
        <!-- /navbar-inner -->
    </div>



    <div class="wrapper">
        <div class="container">
            <div class="row" style="flex-wrap: nowrap;">
                <div class="span3">
                    <div class="sidebar">

                        <ul class="widget widget-menu unstyled">
                            <li class="active">
                                <a href="index.php">
                                    <i class="menu-icon icon-dashboard"></i>
                                    Role
                                </a>
                            </li>
                            <li>
                                <a href="addSujet.php">
                                    <i class="menu-icon icon-bullhorn"></i>
                                    ajouter Role
                                </a>
                            </li>
                            <li>
                                <a href="Utilisateur.php">
                                    <i class="menu-icon icon-inbox"></i>
                                    Utilisateur
                                    <b class="label green pull-right">11</b>
                                </a>
                            </li>

                            <li>
                                <a href="ajouterUtilisateur.php">
                                    <i class="menu-icon icon-tasks"></i>
                                    Ajouter Utilisateur
                                    <b class="label orange pull-right">19</b>
                                </a>
                            </li>
                        </ul>
                        <!--/.widget-nav-->

                        <ul class="widget widget-menu unstyled">
                            <li><a href="ui-button-icon.html"><i class="menu-icon icon-bold"></i> Buttons </a></li>
                            <li><a href="ui-typography.html"><i class="menu-icon icon-book"></i>Typography </a></li>
                            <li><a href="form.html"><i class="menu-icon icon-paste"></i>Forms </a></li>
                            <li><a href="table.html"><i class="menu-icon icon-table"></i>Tables </a></li>
                            <li><a href="charts.html"><i class="menu-icon icon-bar-chart"></i>Charts </a></li>
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




                    </div>
                    <!--/.sidebar-->
                </div>
                <!--/.span3-->


                <div class="span9">
                    <div class="content">

                        <div class="module">
                            <div class="module-head">
                                <h3>Ajouter Utilisateur</h3>
                            </div>
                            <div id="message" style="color :red"> </div>
                            <form class="form-add" action="" method="POST" style="max-width: 200px; margin: auto;" onsubmit="return(verif())" id="f" name="f1">
                                <div class="form-group">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control input-style" id="nom" name="nom" placeholder="Nom">
                                </div>
                                <div class="form-group">
                                    <label for="prenom" class="form-label">Prenom</label>
                                    <input type="text" class="form-control input-style" id="prenom" name="prenom" placeholder="Prenom">
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control input-style" id="email" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label for="pass" class="form-label">Mot de pass</label>
                                    <input type="password" class="form-control input-style" id="pass" name="pass" placeholder="Mot de pass">
                                </div>
                               
                                <div class="form-group">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control form-control-sm" name="role">

                                        <?php
                                        foreach ($roles as $role) {
                                        ?>
                                            <option value="<?php echo $role['id_role'] ?>"><?php echo $role['type'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <!-- <input type="text" class="form-control input-style" id="role" name="role" placeholder="Role"> -->
                                </div>
                                <div>
                                    <input type="submit" name="ajouter" value="ajouter" class="btn btn-primary waves-effect m-r-15" />
                                </div>
                            </form>
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
</body>