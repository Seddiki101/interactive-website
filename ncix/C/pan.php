<?php
include 'config.php';

include_once 'B:\apps\xampp\htdocs\ncix\M\panier.php';
class panierC{
	function ajouterPanier($panier){
		$sql="INSERT INTO panier(nom,prix,id_article) VALUES (:nom,:prix,:id_article)";
	$db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->execute([
					'nom' => $panier->getnom(),
                    'prix'=>$panier->getprix(),
                    'id_article'=>$panier->getid_article()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
	}
	function afficherPanier(){
		$sql="SELECT *FROM panier";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}
	function supprimerPanier($id_panier){
		$sql="DELETE  from panier where  id_panier=:id_panier ";
		
		$db = config::getConnexion();
		try{
			
		$req=$db->prepare($sql);
			$req->bindValue(':id_panier',$id_panier);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
		function modifierPanier($panier,$id_panier){
				try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE panier SET 
					    nom=:nom,
					    prix=:prix,
					    id_article=:id_article,
				
					WHERE id_panier = :id_panier'
				);
				$query->execute([
					'id_panier' => $id_panier,
					 'nom' => $panier->getnom(),
					 'prix' => $panier->getprix(),
					 'id_article' => $panier->getid_article(),

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}

		}
		function rechercherPanier($nom){
			$sql="SELECT * from panier where nom=$nom ";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reserv=$query->fetch();
				return $reserv;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
}

class panierCC{
	function ajouterPanier($panier){
		$sql="INSERT INTO panierp(nom,prix,id_article) VALUES (:nom,:prix,:id_article)";
	$db = config::getConnexion();
            try{
                $query = $db->prepare($sql);
                $query->execute([
					'nom' => $panier->getnom(),
                    'prix'=>$panier->getprix(),
                    'id_article'=>$panier->getid_article()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
	}
	function afficherPanier(){
		$sql="SELECT *FROM panierp";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}
	function supprimerPanier($id_panier){
		$sql="DELETE  from panierp where  id_panier=:id_panier ";
		
		$db = config::getConnexion();
		try{
			
		$req=$db->prepare($sql);
			$req->bindValue(':id_panier',$id_panier);
 	    $req->execute();
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
		}
	}
		function modifierPanier($panier,$id_panier){
				try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE panierp SET 
					    nom=:nom,
					    prix=:prix,
					    id_article=:id_article,
				
					WHERE id_panier = :id_panier'
				);
				$query->execute([
					'id_panier' => $id_panier,
					 'nom' => $panier->getnom(),
					 'prix' => $panier->getprix(),
					 'id_article' => $panier->getid_article(),

					
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}

		}
		function rechercherPanier($nom){
			$sql="SELECT * from panierp where nom=$nom ";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$reserv=$query->fetch();
				return $reserv;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
	
}