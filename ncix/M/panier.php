<?php
class panier{

	private  $id_panier;
	private  $nom;
	private $prix;
	private $id_article;
	
	
	
	function __construct(string $id_article,string $prix,string $nom){
	
		$this->id_article=$id_article;
			$this->prix=$prix;
			$this->nom=$nom;
}
function getid(){
	return $this->id_panier;
}

 function getnom(){
	return $this->nom;
}
 function getprix(){
	return $this->prix;
}

function getid_article(){
	return $this->id_article;
}




		function setnom(string $nom):void{
			$this->nom=$nom;
		}
		
		function setprix(string $prix):void{
				 $this->prix=$prix;

		}
		

   
   function setid_article(string $id_article):void{
	$this->id_article=$id_article;

}
		
}
?>