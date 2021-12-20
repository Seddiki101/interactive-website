<?php
include 'config.php';
	include_once 'B:\apps\xampp\htdocs\integra\M\CS.php';

Class CategorieSerC {
	
//	exp			

	function afficherCat_ser(){
			$sql="SELECT * FROM categorie_service";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerCat_ser($ID_cs){
			$sql="DELETE FROM categorie_service WHERE ID_cs=:ID_cs";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':ID_cs', $ID_cs);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterCat_ser($categorie_Service){
			$sql="INSERT INTO categorie_service (nom_cs, image_cs) 
			VALUES (:nom_cs, :image_cs)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom_cs' => $categorie_Service->getNomcs(),
					'image_cs' => $categorie_Service->getImagecs(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererCat_ser($ID_cs){
			$sql="SELECT * from categorie_service where ID_cs=$ID_cs";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie_Service=$query->fetch();
				return $categorie_Service;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierCat_ser($categorie_Service, $ID_cs){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie_service SET 
						nom_cs= :nom_cs, 
						image_cs= :image_cs 
					WHERE ID_cs= :ID_cs'
				);
				$query->execute([
					'nom_cs' => $categorie_Service->getNomcs(),
					'image_cs' => $categorie_Service->getImagecs(),
					'ID_cs' => $ID_cs
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
class ServiceC {
		function afficherservice(){
			$sql="SELECT * FROM service";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimerservice($IDs){
			$sql="DELETE FROM service WHERE IDs=:IDs";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':IDs', $IDs);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajouterservice($service){
			$sql="INSERT INTO service (nom_ser, image_ser, frais, Description, ID_cs) 
			VALUES (:nom_ser, :image_ser, :frais, :Description, :ID_cs)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_ser' => $service->getNomser(),
					'image_ser' => $service->getImageser(),
					'frais' => $service->getFrais(),
					'Description' => $service->getDesc(),
					'ID_cs' => $service->getIDcs()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recupererservice($IDs){
			$sql="SELECT * from service where IDs=$IDs";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$service=$query->fetch();
				return $service;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
		function sortByDate()
		{
			$sql="SELECT * FROM service order by date_s";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		function sortByDateDesc()
		{
			$sql="SELECT * FROM service order by date_s desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		
		function sortByPrice()
		{
			$sql="SELECT * FROM service order by frais";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		
		
		
	function sortByPriceDesc()
		{
			$sql="SELECT * FROM service order by frais desc";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}	
		
		
		
		
		
		
		function findservicebyctg($ID_cs){
			$sql="SELECT * from service where ID_cs = $ID_cs";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$service=$query->fetch();
				return $service;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		
		function findservicebyname($nom)
		   {   $pdo=config::getConnexion();
        try 
        {
            $query = $pdo->prepare('select * from service where nom_ser =:nom');
            $query->execute(['nom' => $nom]);
            $result = $query->fetchALL();
            return $result;
        }
        catch(Exception $e)
        {
            die('erreur :'.$e->getMessage());
        }
		   }
		 

		
		
		function modifierservice($service, $IDs){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE service SET 
						nom_ser= :nom_ser, 
						image_ser= :image_ser, 
						frais= :frais, 
						Description= :Description, 
						ID_cs= :ID_cs
					WHERE IDs= :IDs'
				);
				$query->execute([
					'nom_ser' => $service->getNomser(),
					'image_ser' => $service->getImageser(),
					'frais' => $service->getFrais(),
					'Description' => $service->getDesc(),
					'ID_cs' => $service->getIDcs(),
					'IDs' => $IDs
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}




//exp

?>