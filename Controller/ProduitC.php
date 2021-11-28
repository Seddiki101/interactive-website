<?php
	include '../config.php';
	include_once '../Model/Produit.php';
	class ProduitC {
		function afficherproduits(){
			$sql = "SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerproduit($NumProduit){
			$sql = "DELETE FROM produit WHERE NumProduit=:NumProduit";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':NumProduit', $NumProduit);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterproduit($Produit){
			$sql = "INSERT INTO produit ( NumProduit,Nomproduit, Marque, Prix, Description, Qte_stock, Id_cat) 
			VALUES (DEFAULT,:Nomproduit,:Marque, :Prix,:Description, :Qte_stock, :Id_cat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					//'NumProduit' => $Produit->getNumProduit(),
					'Nomproduit' => $Produit->getNomproduit(),
					'Marque' => $Produit->getMarque(),
					'Prix' => $Produit->getPrix(),
					'Description' => $Produit->getDescription(),
					'Qte_stock' => $Produit->getQte_stock(),
					'Id_cat' => $Produit->getId_cat()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererproduit($NumProduit){
			$sql = "SELECT * from produit where NumProduit=$NumProduit";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$Produit=$query->fetch();
				return $Produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($Produit, $NumProduit){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE produit SET 
						Nomproduit= :Nomproduit, 
						Marque= :Marque, 
						Prix= :Prix, 
						Description= :Description, 
						Qte_stock= :Qte_stock,
						Id_cat= :Id_cat
					WHERE NumProduit= :NumProduit'
				);
				$query->execute([
					'Nomproduit' => $produit->getNomproduit(),
					'Marque' => $produit->getMarque(),
					'Prix' => $produit->getPrix(),
					'Description' => $produit->getDescription(),
					'Qte_stock' => $produit->getQte_stock(),
					'Id_cat' => $produit->getId_cat(),
					'NumProduit' => $NumProduit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>