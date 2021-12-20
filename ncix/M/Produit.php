<?php
	class Produit{
		private $NumProduit=null;
		private $Nomproduit=null;
		private $Marque=null;
		private $Prix=null;
		private $Prod_desc=null;
		private $Qte_stock=null;
		private $Id_cat=null;
		private $image_prod=null;
		
		function __construct( $Nomproduit, $Marque, $Prix, $Prod_desc, $Qte_stock, $Id_cat, $image_prod){
			$this->Nomproduit=$Nomproduit;
			$this->Marque=$Marque;
			$this->Prix=$Prix;
			$this->Prod_desc=$Prod_desc;
			$this->Qte_stock=$Qte_stock;
			$this->Id_cat=$Id_cat;
			$this->image_prod=$image_prod;
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
		function getProd_desc(){
			return $this->Prod_desc;
		}
		function getQte_stock(){
			return $this->Qte_stock;
		}
		function getId_cat(){
			return $this->Id_cat;
		}
		function getImage_prod(){
			return $this->image_prod;
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
		function setProd_desc(string $Prod_desc){
			$this->Prod_desc=$Prod_desc;
		}
		function setQte_stock(is_integer $Qte_stock){
			$this->Qte_stock=$Qte_stock;
		}
		function setId_cat(string $Id_cat){
			$this->Id_cat=$Id_cat;
		}
		function setImage_prod(string $image_prod){
			$this->image_prod=$image_prod;
		}
		
	}
?>