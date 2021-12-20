<?php
	class Categorie_Service{
		
		private $nom_cs=null;
		private $image_cs=null;
		
		function __construct($nom_cs,$image_cs){
			
						
						$this->nom_cs=$nom_cs;	
						$this->image_cs=$image_cs;
											}
											
											
											
//getters

function getNomcs(){
			return $this->nom_cs;
		}

function getImagecs(){
			return $this->image_cs;
		}

//setters						
					
function setNomcs(string $nom_cs){
			$this->nom_cs=$nom_cs;											
								}		

function setImagecs(string $image_cs){
			$this->image_cs=$image_cs;											
								}
											
							}
							
							
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
//both classes have ID_cs the service is supposed to get it as a foreign key							
							
							
							
class Service{
		private $nom_ser=null;
		private $image_ser=null;
		private $frais=null;
		private $Description=null;
		private $IDI_cs=null;
		
		function __construct($nom_ser,$image_ser,$frais,$Description,$IDI_cs){
						
						$this->nom_ser=$nom_ser;
						$this->image_ser=$image_ser;
						$this->frais=$frais;
						$this->Description=$Description;
						$this->IDI_cs=$IDI_cs;
											}
											
											
											
//getters

function getNomser(){
			return $this->nom_ser;
		}

function getImageser(){
			return $this->image_ser;
		}

				
function getFrais(){
	return $this->frais;
		}		
	
function getDesc(){
	return $this->Description;
		}		

function getIDcs(){
			return $this->IDI_cs;
		}


//setters						
																			
function setNomser(string $nom_ser){
			$this->nom_ser=$nom_ser;											
								}		

function setImageser(string $image_ser){
			$this->image_ser=$image_ser;											
								}		

											
function setFrais(float $frais){
	$this->frais=$frais;
								}

function setDesc(string $Description){
			$this->Description=$Description;									
								}		
								
function setIDcs(int $IDI_cs){
			$this->IDI_cs=$IDI_cs;											
								}							
							
							
			}							
							
?>