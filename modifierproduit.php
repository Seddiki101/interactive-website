<?php
    include_once '../Model/Produit.php';
    include_once '../Controller/ProduitC.php';


    $error = "";

    // create produit
    $Produit = null;

    // create an instance of the controller
    $ProduitC = new ProduitC();
    if (
        isset($_POST["NumProduit"]) &&
		isset($_POST["Nomproduit"]) &&		
        isset($_POST["Marque"]) &&
		isset($_POST["Prix"]) && 
        isset($_POST["Description"]) && 
        isset($_POST["Qte_stock"]) && 
        isset($_POST["Id_cat"])
    ) {
        if (
            !empty($_POST["NumProduit"]) && 
			!empty($_POST['Nomproduit']) &&
            !empty($_POST["Marque"]) && 
			!empty($_POST["Prix"]) && 
            !empty($_POST["Description"]) && 
            !empty($_POST["Qte_stock"]) && 
            !empty($_POST["Id_cat"])
        ) {
            $Produit = new Produit(
                $_POST['NumProduit'],
				$_POST['Nomproduit'],
                $_POST['Marque'], 
				$_POST['Prix'],
                $_POST['Description'],
                $_POST['Qte_stock'],
                $_POST['Id_cat']
            );
            $ProduitC->modifierproduit($Produit, $_POST["NumProduit"]);
            header('Location:afficherListeProduits.php');
        }
        else 
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeProduits.php">Retour à la liste des produits</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['NumProduit'])){
				$Produit = $ProduitC->recupererproduit($_POST['NumProduit']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="NumProduit">Numéro Produit:
                        </label>
                    </td>
                    <td><input type="text" name="NumProduit" id="NumProduit" value="<?php echo $Produit['NumProduit']; ?>" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="Nomproduit">Nom Produit:
                        </label>
                    </td>
                    <td><input type="text" name="Nomproduit" id="Nomproduit" value="<?php echo $Produit['Nomproduit']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Marque">Marque:
                        </label>
                    </td>
                    <td><input type="text" name="Marque" id="Marque" value="<?php echo $Produit['Marque']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Prix" value="<?php echo $Produit['Prix']; ?>" id="Prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Description" id="Description" value="<?php echo $Produit['Email']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Qte_stock">Qte_stock:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Qte_stock" id="Qte_stock" value="<?php echo $Produit['Qte_stock']; ?>">
                    </td>
                </tr>              
                <tr>
                    <tr>
                    <td>
                        <label for="Id_cat">Id_cat:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Id_cat" id="Id_cat" value="<?php echo $Produit['Id_cat']; ?>">
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
    </body>
</html>