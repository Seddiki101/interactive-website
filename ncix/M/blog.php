<?php
	class blog{
		private $id=null;
		private $nom=null;
		private $email=null;
		private $comment;
		private $id_reclam;
		
		function __construct($nom, $email, $comment,$id_reclam){
			$this->nom=$nom;
			$this->email=$email;
			$this->comment=$comment;
			$this->id_reclam=$id_reclam;
		}
		function getid(){
			return $this->id;
		}
		function getnom(){
			return $this->nom;
		}


		function getemail(){
			return $this->email;
		}
		function getcomment(){
			return $this->comment;
		}

		function getidreclam(){
			return $this->id_reclam;
		}


		function setid(string $id){
			$this->id=$id;
		}
		
		function setnom(string $nom){
			$this->nom=$nom;
		}


		function setemail(string $email){
			$this->email=$email;
		}
		function setcomment(string $comment){
			$this->comment=$comment;
		}
		function setid_reclam(string $id_reclam){
			$this->id_reclam=$id_reclam;
		}
	}


?>