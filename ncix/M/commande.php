<?php
class commande{

	private  $id_commande;

	private $rib;
	private $numero_cb;
	private $numero_ce;
	
	
	function __construct(int $rib,int $numero_cb,int $numero_ce){
			
			
			$this->rib=$rib;
			 $this->numero_cb=$numero_cb;
			 $this->numero_ce=$numero_ce;

			
			
}

 
 function getrib():int{
	return $this->rib;
}
 function getnumeo_cb():int{
	return $this->numero_cb;
}
function getnumeo_ce():int{
	return $this->numero_ce;
}




		
		
		function setrib(int $rib):void{
				 $this->rib=$rib;

		}
		function setnumero_cb(int $numero_cb):void{
			$this->numero_cb=$numero_cb;

   }
   function setnumero_ce(int $numero_ce):void{
	$this->numero_ce=$numero_ce;

}
		
}
?>