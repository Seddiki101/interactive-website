<?php
	require_once "C:/xampp/htdocs/blog/Ncix/config.php";
	include_once 'C:/xampp/htdocs/blog/Ncix/Model/blog.php';


	class blogC {
		function afficherblog(){
			$sql="SELECT * FROM blog";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste->fetchAll();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}



		function supprimerblog($id){
			$sql="DELETE FROM blog WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}


		function ajouterblog($blog){
			$sql="INSERT INTO blog (nom, email, comment,id_sujet) 
			VALUES (:nom,:email,:comment,:id_sujet)";
			$db = config::getConnexion();
			try{
				
				$query = $db->prepare($sql);
				$query->execute([
					'nom' => $blog->getnom(),
					'email' => $blog->getemail(),
					'comment' => $blog->getcomment(),
					'id_sujet' => $blog->getidreclam()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}

		function recupererblog($id){
			$sql="SELECT * from blog where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$blog=$query->fetch();
				return $blog;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierblog($blog, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE blog SET 
						nom= :nom, 
						email= :email, 
						comment= :comment,
						id_reclam= :id_reclam
					WHERE id= :id'
				);
				$query->execute([
					'nom' => $blog->getnom(),
					'email' => $blog->getEmail(),
					'comment' => $blog->getcomment(),
					'id_reclam' => $blog->getidreclam(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}




		

		function sujetjoin(int $id_sujet)
		{
		 $pdo = config::getConnexion();
		 try{
			 $query = $pdo->prepare('SELECT * FROM blog where id_sujet =?');
	
			 $query->execute([$id_sujet]);
			 $result = $query->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		 }catch(Exception $e)
		 {
		   die('ERREUR: '.$e->getMessage());
		 }
	
		}
	














	}
?>