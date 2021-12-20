<link rel="stylesheet" href="back.css" type="text/css" media="all" />
<head>
  
<?php
 include_once '../../C/livraisonC.php';
 
 $co = new livraisonC();
 if(isset($_GET['id'])){
   $livraisonC = new livraisonC();
   $listeC = $livraisonC->afficherLivraisonDetail($_GET['id']);
 
 foreach($listeC as $livraison){
 ?>
 <body>


  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
  </div>
   <form action="" method="post">
   <!-- Box -->
   <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Modifier Livraison</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Adresse </label>
                <input type="text" class="field size1" name="adresse" value="<?php echo $livraison['adresse'];?>" />
              </p>
              <p> 
                <label>DateL </label>
                <input type="date" class="field size1" name="dateL" value=<?php echo $livraison['dateL'];?> />
              </p>
              <p> 
                  <label>livreur </label>
                  <input type="text" class="field size1" name="livreur"  value=<?php echo $livraison['livreur'];}?> />
                </p>

              <p> 
                <label>Prix </label>
                <input type="number" class="field size1" name="prix" value=<?php echo $livraison['prix'];}?> />
              </p>
              

             

             
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" />
            </div>
            <!-- End Form Buttons -->
          </form>
 </div>
 </div>
 <?php
 // create event
 $livraison = null;

 // create an instance of the controller

 $livraisonC = new livraisonC();
 if (
     isset($_POST["adresse"]) && 
      isset($_POST["dateL"]) && 
     isset($_POST["prix"])&&
     isset($_POST["livreur"])
 ) {
     if (
         !empty($_POST["adresse"]) && 
         !empty($_POST["dateL"]) && 
         !empty($_POST["prix"])&&
         !empty($_POST["livreur"])
     ) {
         $livraison = new livraison(
             $_POST['adresse'],
             $_POST['dateL'],
             $_POST['prix'],
             $_POST['livreur']
         );
        $livraisonC->modifierLivraison($_GET['id'],$livraison);
         
      header('Location:gestionlivraison.php');
     }
     else
         $error = "Missing information";
 }

 


?>