<?php
	include_once 'config.php';
	include_once 'B:\apps\xampp\htdocs\ncix\M\Role.php';
	class RoleC {
		function afficherroles(){
			$sql="SELECT * FROM role";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste->fetchALL();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterrole($role){
			
			try{
			$db = config::getConnexion();
			$sql="INSERT INTO role (type) 
			VALUES (:type)";

				$query = $db->prepare($sql);
				$query->execute([
					'type' => $role->gettype(),
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function supprimerrole($id_role){
			$sql="DELETE FROM role WHERE id_role=:id_role";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_role', $id_role);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		
		function recupererrole($id_role){
			$sql="SELECT * from role where id_role=$id_role";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$role=$query->fetch();
				return $role;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierrole($role, $id_role){
			try {

				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE role SET 
						type= :type
					WHERE id_role= :id_role'
				);
				var_dump($query);
				$query->execute([
					'type' => $role->gettype(),
					'id_role' => $id_role
				]);
				// echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
	/*public function afficherUtilisateurs($id_role){
		try{ 
			$pdo = getConnexion();
			$query = $pdo->prepare(
				'SELECT * FROM Utilisateur where role =:id');
			   $query -> execute([
				   'id'=>$id_role
			   ]);
			   return  $query->fetchAll(); 
		 } catch(PDOException $e){
			 $e->getMessage();
		 }

	} 
	*/
 

?>