<?php
	class Categorie{
		private $Id_cat=null;
		private $NomCategorie=null;
		
		
		function __construct( $NomCategorie){
			
			$this->NomCategorie=$NomCategorie;
			
		}
		function getId_cat(){
			return $this->Id_cat;
		}
		function getNomCategorie(){
			return $this->NomCategorie;
		}
		
		function setId_cat(string $Id_cat){
			$this->Id_cat=$Id_cat;
		}
		function setNomCategorie(string $NomCategorie){
			$this->NomCategorie=$NomCategorie;
		}
		
		
	}


?>