<?php
include'config.php';

include_once 'B:\apps\xampp\htdocs\ncix\M\commande.php';
class commandeC{
	function ajouterCommande($commande){
		$sql="INSERT INTO commande(mode,rib,numero_cb,numero_ce) VALUES (:mode,:rib,:numero_cb,:numero_ce)";
	$db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'mode' => $commande->getmode(),
                    'rib'=>$commande->getrib(),
                    'numero_cb'=>$commande->getnumeo_cb(),
                    'numero_ce'=>$commande->getnumeo_ce(),
                  
                   
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
	}
	function afficherCommande(){
		$sql="SELECT *FROM commande";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}
	function supprimerCommande($id_commande){
		$sql="DELETE FROM commande WHERE id_commande=:id_commande";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_commande',$id_commande);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierCommande($commande,$id_commande){
				try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE commande SET 
					    mode=:mode,
					    rib=:rib,
					    numero_cb=:numero_cb,
					    numero_ce=:numero_ce,
				
					WHERE id_commande = :id_commande'
				);
				$query->execute([
					 'mode' => $commande->getmode(),
					 'rib' => $commande->getrib(),
					 'numero_cb' => $commande->getnumeo_cb(),
					 'numero_ce' => $commande->getnumeo_ce(),

					'id_commande' => $id_commande
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}

		}
		function rechercherCommande($id_commande){
			$sql="SELECT * from commande where id_commande=$id_commande";
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