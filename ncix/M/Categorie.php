<?php
	class Categorie{
		private $Id_cat=null;
		private $NomCategorie=null;
		private $image_cat=null;
		
		
		function __construct( $NomCategorie, $image_cat){
			
			$this->NomCategorie=$NomCategorie;
			$this->image_cat=$image_cat;
			
		}
		function getId_cat(){
			return $this->Id_cat;
		}
		function getNomCategorie(){
			return $this->NomCategorie;
		}
		function getImage_cat(){
			return $this->image_cat;
		}
		
		/*function setId_cat(string $Id_cat){
			$this->Id_cat=$Id_cat;
		}*/
		function setNomCategorie(string $NomCategorie){
			$this->NomCategorie=$NomCategorie;
		}
		function setImage_cat(string $image_cat){
			$this->image_cat=$image_cat;											
		}
		
		
	}


?>