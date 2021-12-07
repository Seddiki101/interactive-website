<?php
require_once 'C:\\xampp\htdocs\ncix\config.php';
require_once 'C:\\xampp\htdocs\ncix\Model\Categorie.php';
	class CategorieC {
		function affichercategories(){
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimercategorie($Id_cat){
			$sql="DELETE FROM categorie WHERE Id_cat=:Id_cat";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':Id_cat', $Id_cat);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categorie ( Id_cat, NomCategorie, image_cat) 
			VALUES (DEFAULT,:NomCategorie, :image_cat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'NomCategorie' => $categorie->getNomCategorie(),
					'image_cat' => $categorie->getImage_cat()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercategorie($Id_cat){
			$sql="SELECT * from categorie where Id_cat=$Id_cat";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercategorie($categorie, $Id_cat){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
						
						NomCategorie= :NomCategorie
					WHERE Id_cat= :Id_cat'
				);
				$query->execute([
					'NomCategorie' => $categorie->getNomCategorie(),
					'Id_cat' => $Id_cat
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function chercherNomcategories(){
			try{
				$pdo= config::getConnexion();
				$query=$pdo->prepare(
					"SELECT NomCategorie,count(p.id_cat) as nbr FROM produit p inner join categorie c on c.id_cat=p.id_cat group by Nomcategorie"
				);
				$query->execute();
				return $query->fetchAll();
			}catch(PDOException $e){
				$e->getMessage();
			}
		}

	}
?>