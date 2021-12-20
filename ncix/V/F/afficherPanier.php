<?php
include '..\..\C\pan.php';
$pan=new panierC();
$listepanier=$pan->afficherPanier();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Afficher Liste des panier</title>
    </head>
    <body>

		<button><a href="ajouterpanier.php">Ajouter un panier</a></button>
     	<hr>
		<table border=1 align = 'center'>
			<tr>
				<th>id_panier</th>
				<th>nom d article </th>
				<th>prix</th>
				<th>quantite</th>
				
				
			</tr>

			<?PHP
				foreach($listepanier as $pan){
			?>
				<tr>
					<td><?PHP echo $reserv['id_panier']; ?></td>
					<td><?PHP echo $reserv['nom']; ?></td>
					<td><?PHP echo $reserv['prix']; ?></td>
					<td><?PHP echo $reserv['quantite']; ?></td>
					
					
					
					<td>
						<form method="POST" action="supprimerUtilisateur.php">
						<input type="submit" name="supprimer" value="supprimer">
					
						</form>
					</td>
					<td>
						<a href="modifierpanier.php?id=<?PHP echo $reserv['id_reservation']; ?>"> Modifier </a>
					</td>
				</tr>
			<?PHP
				}
			?>
		</table>
	</body>
</html>