<?php
	class Produit{
		private $NumProduit=null;
		private $Nomproduit=null;
		private $Marque=null;
		private $Prix=null;
		private $Description=null;
		private $Qte_stock=null;
		private $Id_cat=null;
		
		function __construct( $Nomproduit, $Marque, $Prix, $Description, $Qte_stock, $Id_cat){
			$this->Nomproduit=$Nomproduit;
			$this->Marque=$Marque;
			$this->Prix=$Prix;
			$this->Description=$Description;
			$this->Qte_stock=$Qte_stock;
			$this->Id_cat=$Id_cat;
		}
		function getNumProduit(){
			return $this->NumProduit;
		}
		function getNomproduit(){
			return $this->Nomproduit;
		}
		function getMarque(){
			return $this->Marque;
		}
		function getPrix(){
			return $this->Prix;
		}
		function getDescription(){
			return $this->Description;
		}
		function getQte_stock(){
			return $this->Qte_stock;
		}
		function getId_cat(){
			return $this->Id_cat;
		}
		
		function setNomProduit(string $NomProduit){
			$this->NomProduit=$NomProduit;
		}
		function setMarque(string $Marque){
			$this->marque=$Marque;
		}
		function setPrix(is_float $Prix){
			$this->Prix=$Prix;
		}
		function setDescription(string $Description){
			$this->Description=$Description;
		}
		function setQte_stock(is_integer $Qte_stock){
			$this->Qte_stock=$Qte_stock;
		}
		function setId_cat(string $Id_cat){
			$this->Id_cat=$Id_cat;
		}
		
	}


?>