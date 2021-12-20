<?PHP
include "config.php";
require_once 'B:\apps\xampp\htdocs\ncix\M\Utilisateur.php';

class UtilisateurC
{

	function ajouterUtilisateur($Utilisateur)
	{
		$sql = "INSERT INTO Utilisateur (nom, prenom, email, password,role,code) 
			VALUES (:nom,:prenom,:email, :password, :role, :code)";
		$db = config::getConnexion();
		$encpass = password_hash($Utilisateur->getPassword(), PASSWORD_BCRYPT);

		try {
			$query = $db->prepare($sql);
			$code = rand(999999, 111111);
			$query->execute([
				'nom' => $Utilisateur->getNom(),
				'prenom' => $Utilisateur->getPrenom(),
				'email' => $Utilisateur->getEmail(),
				'password' => $encpass,
				'role' => $Utilisateur->getRole(),
				'code' => $code
			]);
			$subject = "Email Verification Code";
            $message = "Your verification code is $code";
            $sender = "From: mayssayahyaoui00@gmail.com";
		//	mail($Utilisateur->getEmail(), $subject, $message, $sender);
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}


	function afficherUtilisateurs()
	{

		$sql = "SELECT * FROM Utilisateur";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerUtilisateur($id)
	{
		$sql = "DELETE FROM Utilisateur WHERE id= :id";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':id', $id);
		try {
			$req->execute();
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierUtilisateur($Utilisateur, $id)
	{
		try {
			$db = config::getConnexion();
			if($Utilisateur->getPassword() == ""){
				
				$query = $db->prepare(
					'UPDATE Utilisateur SET 
							nom = :nom, 
							prenom = :prenom,
							email = :email,
							role = :role,
							img_path = :img
						WHERE id = :id'
				);
	
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'role' => $Utilisateur->getRole(),
					'img'=>$Utilisateur->getImg(),
					'id' => $id
				]);
			}else{

				$query = $db->prepare(
					'UPDATE Utilisateur SET 
							nom = :nom, 
							prenom = :prenom,
							email = :email,
							password = :password,
							role = :role,
							img_path = :img
						WHERE id = :id'
				);
				$encpass = password_hash($Utilisateur->getPassword(), PASSWORD_BCRYPT);
	
				$query->execute([
					'nom' => $Utilisateur->getNom(),
					'prenom' => $Utilisateur->getPrenom(),
					'email' => $Utilisateur->getEmail(),
					'password' => $encpass,
					'role' => $Utilisateur->getRole(),
					'img'=>$Utilisateur->getImg(),
					'id' => $id
				]);
			}
			return" profil modifier <br>";
		} catch (PDOException $e) {
			$e->getMessage();
			return $e->getMessage();
		}
	}
	function recupererUtilisateur($id)
	{
		$sql = "SELECT * from Utilisateur where id=$id";
		$db = config::getConnexion();
		try {
			$query = $db->prepare($sql);
			$query->execute();

			$user = $query->fetch();
			return $user;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}


	function connexionUser($email, $password)
	{
		$sql = "SELECT * FROM Utilisateur WHERE Email='" . $email . "'";
		$db = config::getConnexion();

		try {
			$query = $db->prepare($sql);
			$query->execute();
			$user = $query->fetch();
			if (password_verify($password, $user['password'])) {
				$message = $user;
			} else {
				$message = "pseudo ou le mot de passe est incorrect";
			}
		} catch (Exception $e) {
			$message = " " . $e->getMessage();
		}
		return $message;
	}

	function verfierCompte($id, $code){
		$user=$this->recupererUtilisateur($id);
		if($user['code'] == $code  ){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE Utilisateur SET 
							status = :status
						WHERE id = :id'
				);
	
				$query->execute([
					'status' => 'verified',
					'id' => $id
				]);
				$message = 'true';
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}else{
			$message = "code de verfication est incorrect";
		}


		return $message;

	}
	
	
	function forgetPassword($email)
	{
		$sql = "UPDATE utilisateur set code = :code WHERE email= :email";
		$db = config::getConnexion();

		try {
			$query = $db->prepare($sql);
			$code = rand(999999, 111111);
			
			$query->execute([
				'email' => $email,
				'code' => $code
			]);
			if($query->rowCount()>0){
				$subject = "Reser password code";
				$message = "Your Reset code is $code";
				$sender = "From: mayssayahyaoui00@gmail.com";
				mail($email, $subject, $message, $sender);
				$message="true";
			}else {
				$message="email not found";
			}
			return $message;
			
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}

	function changePassword($email, $code, $password)
	{
		$sql = "UPDATE utilisateur set password = :password, code=0 WHERE email= :email && code=:code";
		$db = config::getConnexion();

		try {
			$query = $db->prepare($sql);
			$encpass = password_hash($password, PASSWORD_BCRYPT);

			$query->execute([
				'email' => $email,
				'password' => $encpass,
				'code'=>$code
			]);
			
			if($query->rowCount()>0){
				$message="true";
			}else {
				$message="code invalid";
			}
			return $message;
			
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
}
