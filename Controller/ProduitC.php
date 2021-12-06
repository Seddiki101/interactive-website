<?php
include_once '../config.php';
include_once '../Model/Produit.php';
class ProduitC
{
	function afficherproduits()
	{
		$sql = "SELECT * FROM produit p inner join categorie c on p.id_cat=c.id_cat";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function supprimerproduit($NumProduit)
	{
		$sql = "DELETE FROM produit WHERE NumProduit=:NumProduit";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':NumProduit', $NumProduit);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function ajouterproduit($Produit)
	{
		$sql = "INSERT INTO produit ( NumProduit,Nomproduit, Marque, Prix, Prod_desc, Qte_stock, Id_cat, image_prod) 
			VALUES (DEFAULT,:Nomproduit,:Marque, :Prix,:Prod_desc, :Qte_stock, :Id_cat, :image_prod)";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute([
				//'NumProduit' => $Produit->getNumProduit(),
				'Nomproduit' => $Produit->getNomproduit(),
				'Marque' => $Produit->getMarque(),
				'Prix' => $Produit->getPrix(),
				'Prod_desc' => $Produit->getProd_desc(),
				'Qte_stock' => $Produit->getQte_stock(),
				'Id_cat' => $Produit->getId_cat(),
				'image_prod' => $Produit->getImage_prod()
			]);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function recupererproduit($NumProduit)
	{
		try {
			$pdo = config::getConnexion();
			$query = $pdo->prepare("SELECT * from produit where NumProduit=:NumProduit");
			$query->execute([
				'NumProduit' => $NumProduit
			]);
			return $query->fetch();
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}

	function modifierproduit($Produit, $NumProduit)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE produit SET 
						Nomproduit=:Nomproduit, 
						Marque=:Marque, 
						Prix=:Prix, 
						Prod_desc=:Prod_desc, 
						Qte_stock=:Qte_stock,
						Id_cat=:Id_cat
					WHERE NumProduit=:NumProduit'
			);
			$query->execute([
				'Nomproduit' => $Produit->getNomproduit(),
				'Marque' => $Produit->getMarque(),
				'Prix' => $Produit->getPrix(),
				'Prod_desc' => $Produit->getProd_desc(),
				'Qte_stock' => $Produit->getQte_stock(),
				'Id_cat' => $Produit->getId_cat(),
				'NumProduit' => $NumProduit
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}





	function afficherproduitsParCategorie($id_cat)
	{
		$pdo = config::getConnexion();
		$query = $pdo->prepare("SELECT * FROM produit p inner join categorie c on p.id_cat=c.id_cat where p.id_cat=:id_cat");
		try {
			$query->execute([
				'id_cat' => $id_cat
			]);
			return $query->fetchAll();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function countProduits()
	{
		$sql = "SELECT count(*) FROM produit";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste->fetchColumn();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}
	function countProduitsOutoFStock()
	{
		$sql = "SELECT count(*) FROM produit where qte_stock=0";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste->fetchColumn();
		} catch (Exception $e) {
			die('Erreur:' . $e->getMessage());
		}
	}

	function updateLikes($id)
	{
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE produit SET 
						Likes=likes+1
					WHERE NumProduit=:NumProduit'
			);
			$query->execute([
				'NumProduit' => $id
			]);
			return header("Location: product-details.php?NumProduit=" . $id);
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}
