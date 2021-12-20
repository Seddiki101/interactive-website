<?php
include '..\..\M\panier.php';
include '..\..\C\pan.php';
$panierC=new panierC();
$panier = $panierC->supprimerPanier($_POST['id_panier']);
$listepanier=$panierC->afficherPanier(); 
?>

<!DOCTYPE HTML>
<html>
	<head>
	    <title>NCIX</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
				<header id="header" class="alt">
					<a href="index.html" class="logo"><strong>NCIX</strong> <span>Website</span></a>
					<nav>
						<button id="signb"><a href="Sign in.html">Sign in</a></button>
						<button id="signb"><a href="Inscription.html">Sign Up</a></button>
						<a href="#menu">Menu</a>
					</nav>
				</header>
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Item</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            
                            <!--/ End Tab Nav -->
                        </div>	
		
		<form action="" method="POST" target="_blank" class="newsletter-inner">
                           <div class="row">
						   <div class="col-2">
						   </div>
						   <div class="col-10">
						   
								<input name="rechercher" placeholder="rechercher" required="" type="rechercher">
								<button type="submit"  name="submit"  class="btn">rechercher</button>
								</div>
								</div>
							</form>

							<?php
    if (isset($_POST['submit']))
    {
      $id_panier=$_POST['rechercher'];
     

    $bdd = new PDO ("mysql:host=localhost;dbname=ncix","root","");
    $tree = $bdd->query("SELECT * FROM panier WHERE id_panier='$id_panier'");
    

    
      
          echo "<table class='table table-bordered table-striped'>";
              echo "<thead>";
                  echo "<tr>";
                      echo "<th>id</th>";
                      echo "<th>nom</th>";
                      echo "<th>prix</th>";
                      echo "<th>id_article</th>";
                     
                      
                  echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
              while($result = $tree->fetch()){
                  echo "<tr>";
                      echo "<td>" . $result['id_panier'] . "</td>";
                      echo "<td>" . $result['nom'] . "</td>";
                      echo "<td>" . $result['prix'] . "</td>";
                      echo "<td>" . $result['id_article'] . "</td>";
                  
                      echo "<td>";
                      echo "<a href='' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                      echo "<a href='update.php?id=". $result['id_panier'] ."' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                      
                  echo "</td>";
                     
                  echo "</tr>";
              }
              echo "</tbody>";                            
          echo "</table>";
      
    while($result = $tree->fetch())
    {
      echo $result['id_panier'];
      echo $result['nom'];
      echo $result['prix'];
      echo $result['id_article'];

            
    }
  }
    ?>






			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>ID</th>
								<th>NOM</th>
								<th class="text-center"> PRIX</th>
								<th class="text-center">ID_ARTICLE</th> 
                                <th class="text-center">suprimmer</th> 
								<th class="text-center">modifier</th> 
								
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>






						<tbody>

						<?php
						$s=0;
						$ss=0;
						$sss=1;
						$a=1;
						 foreach($listepanier as $row) { ?>
							<tr>
								<td >  <?php echo $row['id_panier'] ?> </td>
								<td >  <?php echo $row['nom'] ?> </td>
								<td >  <?php echo $row['prix']  ?> </td>
								<?php   $s=$s+$row['prix']  ?>
								
								<td >  <?php echo $row['id_article'] ?> </td>
								<form method="POST" action="cart.php">
								    
						<td>               <input type="submit" name="suprimmer" class="tf-ion-android-cart" value="sup">
						<input type="hidden" value=<?PHP echo $row['id_panier']; ?> name="id_panier">	       </td>
					   </td>
					   </form>    
								<td>               </td>
							</tr>
							
							<?php } ?>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										
										<li class="last">You Pay<span>$ <?php echo $s ?></span></li>
									</ul>
									<div class="button5">
										<a href="checkout.php" class="btn">Checkout</a>
										<a href="AffctgF.php" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			

</body>
</html>