<?php
    include_once '../Model/Categorie.php';
    include_once '../Controller/CategorieC.php';


    $error = "";

    // create categorie
    $Categorie = null;

    // create an instance of the controller
    $CategorieC = new CategorieC();
    if (
        isset($_POST["Id_cat"]) && 
        isset($_POST["NomCategorie"])
    ) {
        if (
            !empty($_POST["Id_cat"]) && 
            !empty($_POST["NomCategorie"])
        ) {
            $Categorie = new Categorie(
                $_POST['Id_cat'],
                $_POST['NomCategorie']
            );
            $CategorieC->modifiercategorie($Categorie, $_POST["Id_cat"]);
            header('Location:afficherListeCategories.php');
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
        <button><a href="afficherListeCategories.php">Retour à la liste des categories</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['Id_cat'])){
				$Categorie = $CategorieC->recuperercategorie($_POST['Id_cat']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Id_cat">Id_cat:
                        </label>
                    </td>
                    <td><input type="text" name="Id_cat" id="Id_cat" value="<?php echo $Categorie['Id_cat']; ?>" maxlength="20"></td>
                </tr>
                    <tr>
                    <td>
                        <label for="NomCategorie">NomCategorie:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="NomCategorie" id="NomCategorie" value="<?php echo $Categorie['NomCategorie']; ?>">
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