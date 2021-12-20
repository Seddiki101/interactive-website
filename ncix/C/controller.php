<?php
include'config.php';
include_once"../../M/reservation.php";

class reservationC{
	function ajouterReservation($re){
		$sql="INSERT INTO re(date_depart,date_arrive,nbpa, nben,nom,prenom,email) VALUES (:date_depart,:date_arrive,:nbpa, :nben,:nom,:prenom,:email)";
	$db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'date_depart' => $reservation->getdate_depart(),
                    'date_arrive'=>$reservation->getdate_arrive(),
                    'nbpa'=>$reservation->getnbpa(),
                    'nben'=>$reservation->getnben(),
                    'nom'=>$reservation->getnom(),
                    'prenom' => $reservation->getprenom(),
                    'email' => $reservation->getemail(),
                   
                ]);
             }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
	} 
	function afficherReservation(){
		$sql="SELECT *FROM re";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
	}
	function supprimerReservation($id_reservation){
		$sql="DELETE FROM re WHERE id_reservation=:id_reservation";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_reservation',$id_reservation);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierReservation($re,$id_reservation){
				try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE reservation SET 
					    date_depart=:date_depart,
					    date_arrive=:date_arrive,
					    nbpa=:nbpa,
					    nben=:nben,
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						
					WHERE id_reservation = :id_reservation'
				);
				$query->execute([
					 'date_depart' => $reservation->getdate_depart(),
                    'date_arrive'=>$reservation->getdate_arrive(),
                    'nbpa'=>$reservation->getnbpa(),
                    'nben'=>$reservation->getnben(),
                    'nom'=>$reservation->getnom(),
                    'prenom' => $reservation->getprenom(),
                    'email' => $reservation->getemail(),
					'id_reservation' => $id_reservation
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}

		}
		function rechercherReservation($id_reservation){
			$sql="SELECT * from re where id_reservation=$id_reservation";
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
		function recupererReservation($id_reservation){
			$sql="SELECT * from res where id_reservation=$id_reservation";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$reserv = $query->fetch(PDO::FETCH_OBJ);
				return $reserv;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

	
}