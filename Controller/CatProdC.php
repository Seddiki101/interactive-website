<?php
	include '../config.php';
	include_once '../Model/catprod.php';

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
						
						NomCategorie= :NomCategorie,
						image_cat= :image_cat 
					WHERE Id_cat= :Id_cat'
				);
				$query->execute([
					'NomCategorie' => $categorie->getNomCategorie(),
					'image_cat' => $categorie->getImage_cat(),
					'Id_cat' => $Id_cat
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

		public function chercherCategorie($NomCategorie)
    {
        try {
            $input = "%$NomCategorie%";
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * FROM produits WHERE NomCategorie like :NomCategorie"
            );
            $query->execute([
                'NomCategorie' => $input
            ]);
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


	}

	//////////////////////////////////////////////////

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
			$sql = "INSERT INTO produit ( NumProduit,Nomproduit, Marque, Prix, Prod_desc, Qte_stock, Id_cat, image_prod) 
			VALUES (DEFAULT,:Nomproduit,:Marque, :Prix,:Prod_desc, :Qte_stock, :Id_cat, :image_prod)";
			$db = config::getConnexion();
			try{
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
						Prod_desc= :Prod_desc, 
						Qte_stock= :Qte_stock,
						Id_cat= :Id_cat,
						image_prod= :image_prod,
					WHERE NumProduit= :NumProduit'
				);
				$query->execute([
					'Nomproduit' => $produit->getNomproduit(),
					'Marque' => $produit->getMarque(),
					'Prix' => $produit->getPrix(),
					'Prod_desc' => $produit->getProd_desc(),
					'Qte_stock' => $produit->getQte_stock(),
					'Id_cat' => $produit->getId_cat(),
					'image_prod' => $produit->getImage_prod(),
					'NumProduit' => $NumProduit
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}


    public function trierProduitPrixDesc()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from produit order by prix DESC"
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function trierProduitPrixAsc()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from produit order by prix ASC"
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function trierProduitNomAsc()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from produit order by nom Asc"
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public function trierProduitNomDesc()
    {
        try {
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * from produit order by nom Desc"
            );
            $query->execute();
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	
		 public function chercherNom($Nomproduit)
    {
        try {
            $input = "%$Nomproduit%";
            $pdo = getConnexion();
            $query = $pdo->prepare(
                "SELECT * FROM produits WHERE Nomproduit like :Nomproduit"
            );
            $query->execute([
                'Nomproduit' => $input
            ]);
            return $query->fetchAll();
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

	}

	

	
?>
