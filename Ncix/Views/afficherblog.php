
<?php
	include '../Controller/blogC.php';
	$blogC=new blogC();
	$listeblogs=$blogC->afficherblog(); 
?>
<html>
	<head></head>
	<body>
	    <button><a href="/Ncix/blog-details.php">Ajouter un Reponse</a></button>
		<center><h1>Liste des reponse</h1></center>
		<table border="1" align="center">
			<tr>
				<th>id</th>
				<th>Nom</th>
				<th>Email</th>
				<th>comment</th>
				<th>Modifier</th>
				<th>Supprimer</th>
			</tr>
			<?php
				foreach($listeblogs as $blog){
			?>
			<tr>
				<td><?php echo $blog['id']; ?></td>
				<td><?php echo $blog['nom']; ?></td>
				<td><?php echo $blog['email']; ?></td>
				<td><?php echo $blog['comment']; ?></td>
				<td>
					<form method="POST" action="modifierblog.php">
						<input type="submit" name="Modifier" value="Modifier">
						<input type="hidden" value=<?PHP echo $blog['id']; ?> name="id">
					</form>
				</td>
				<td>
					<a href="supprimerblog.php?id=<?php echo $blog['id']; ?>">Supprimer</a>
				</td>
			</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>
