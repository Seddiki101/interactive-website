<?php
    include_once '../Model/Produit.php';
    include_once '../Controller/ProduitC.php';


    $error = "";

    // create produit
    $Produit = null;

    // create an instance of the controller
    $ProduitC = new produitC();
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
            $ProduitC->ajouterproduit($Produit);
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
        <button><a href="afficherListeProduits.php">Retour à la liste des Produits</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="NumProduit">NuméroProduit:
                        </label>
                    </td>
                    <td><input type="text" name="NumProduit" id="NumProduit" maxlength="20"></td>
                </tr>
				<tr>
                    <td>
                        <label for="Nomproduit">Nom produit:
                        </label>
                    </td>
                    <td><input type="text" name="Nomproduit" id="nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Marque">Marque:
                        </label>
                    </td>
                    <td><input type="text" name="Marque" id="Marque" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Prix" id="Prix">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="Description" name="Description" id="Description">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Qte_stock">Qte_stock:
                        </label>
                    </td>
                    <td>
                        <input type="Qte_stock" name="Qte_stock" id="Qte_stock" >
                    </td>
                </tr>  
                 <tr>
                    <td>
                        <label for="Id_cat">Id_cat:
                        </label>
                    </td>
                    <td>
                        <input type="Id_cat" name="Id_cat" id="Id_cat" >
                    </td>
                </tr>                          
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>