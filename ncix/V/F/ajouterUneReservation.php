<?php
include '../../M/reservation.php';
include '../../C/controller.php';
$error='';
$reserv;
$resr=new reservationC();
if ( isset($_POST["date_depart"])&& 
	isset($_POST["date_arrive"])&&
	isset($_POST["nbpa"])&&
	 isset($_POST["nben"])&&
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) 
    
) {
    if (!empty($_POST["date_depart"])&& 
    	!empty($_POST["date_arrive"])&&
    	!empty($_POST["nbpa"])&&
    	!empty($_POST["nben"])&&
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) 
        
    ) {
        $reserv= new reservation (
            $_POST['date_depart'],
            $_POST['date_arrive'],
            $_POST['nbpa'],
            $_POST['nben'],
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email']
            
        );
    $resr->ajouterReservation($reserv);
    header('Location:afficherReservation.php');
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
