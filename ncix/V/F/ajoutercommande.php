<?php
include '..\..\M\commande.php';
include '..\..\C\comm.php';
$error='';
$com;
$com=new commandeC();
if ( isset($_POST["mode"])&& 
	isset($_POST["rib"])&&
    isset($_POST["numero_cb"])&&
	isset($_POST["numero_ce"])
    
) {
    if (!empty($_POST["mode"])&& 
    	!empty($_POST["rib"])&&
        !empty($_POST["numero_cb"])&&
    	!empty($_POST["numero_ce"]) 
        
    ) {
        $com= new commande (
            $_POST['mode'],
            $_POST['rib'],
            $_POST['numero_cb'],
            $_POST['numero_ce']
            
        );
    $resr->ajouterCommande($com);
    header('Location:afficherCommande.php');
}
    else
        $error = "Missing information";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
<body>
<button><a href="afficherUtilisateurs.php">Retour à la liste</a></button>
<hr>

<div id="error">
    <?php echo $error; ?>
</div>

<form action="" method="POST">

        <tr>
            <td rowspan='3' colspan='1'>Fiche Personnelle</td>
            <td>
                <label for="nom">Nom:
                </label>
            </td>
            <td><input type="text" name="nom" id="nom" maxlength="20"></td>
        </tr>
        <tr>
            <td>
                <label for="prenom">Prénom:
                </label>
            </td>
            <td><input type="text" name="prenom" id="prenom" maxlength="20"></td>
        </tr>

        <tr>
            <td>
                <label for="email">Adresse mail:
                </label>
            </td>
            <td>
                <input type="email" name="email" id="email" pattern=".+@gmail.com|.+@esprit.tn">
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
