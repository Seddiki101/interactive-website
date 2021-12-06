<?php
include_once '../config.php';
include_once '../Controller/ProduitC.php';
include_once '../Controller/CategorieC.php';

$ProduitC = new ProduitC();
$CategorieC = new CategorieC();
$total = $ProduitC->countProduits();
$outOfStock = $ProduitC->countProduitsOutoFStock();
$InStock = $total - $outOfStock;
$percentageOOS = ($outOfStock * 100) / $total;
$percentageIS = ($InStock * 100) / $total;
$nomcats = $CategorieC->chercherNomcategories();
$labels = "";
$data = "";
foreach ($nomcats as $nomcat) {
    $labels = $labels . '"' . $nomcat['NomCategorie'] . '"' . ',';
}
$labels = substr_replace($labels, "", -1);


foreach ($nomcats as $nomcat) {
    $data = $data . $nomcat['nbr'] . ',';
}
$data = substr_replace($data, "", -1);


?>
<!DOCTYPE html>

<html lang="en">
<style>
    .container {
        display: flex;
        width: 120%;
        height: 100%;
    }

    .chart1,
    .chart2 {
        width: 90%;
    }
</style>

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
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


    <title></title>
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
                        <div class="container">
                            <div class="module">
                                <div class="module-head">
                                    <div class="module-head">
                                        <h3>Nombre produits en stock</h3>
                                    </div>
                                    <div class="module-body">
                                        <div class="chart1">
                                            <canvas id="pie-chart" width="450" height="500"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="module">
                                <div class="module-head">
                                    <div class="module-head">
                                        <h3>Nombre produits par categorie</h3>
                                    </div>
                                    <div class="module-body">
                                        <div class="chart2">
                                            <canvas id="bar-chart" width="450" height="500"></canvas>
                                        </div>
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
<script>
    new Chart(document.getElementById("pie-chart"), {
        type: 'pie',
        data: {
            labels: ["Out Of Stock", "In Stock"],
            datasets: [{
                label: "Number of items",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                data: [<?php echo number_format((float)$percentageOOS, 2, '.', '') ?>, <?php echo number_format((float)$percentageIS, 2, '.', '')  ?>]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'Pie chart for products stock'
            }
        }
    });
    new Chart(document.getElementById("bar-chart"), {
        type: 'bar',
        data: {
            <?php echo "labels: [" . $labels . "]"; ?>,
            datasets: [{
                label: "Products",
                backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                <?php echo "data: [" . $data . "]"; ?>,
            }]
        },
        options: {
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Products distributed by categorie'
            }
        }
    });
</script>

</html>