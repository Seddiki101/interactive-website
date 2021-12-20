<?php
class commande{

	private  $id_commande;
	private  $mode;
	private $rib;
	private $numero_cb;
	private $numero_ce;
	
	
	function __construct(string $mode,int $rib,int $numero_cb,int $numero_ce){
			
			$this->mode=$mode;
			$this->rib=$rib;
			 $this->numero_cb=$numero_cb;
			 $this->numero_ce=$numero_ce;

			
			
}
function getid_commande():int{
	return $this->id_commande;
}
 function getmode():string{
	return $this->mode;
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




		function setmode(string $mode):void{
			$this->mode=$mode;
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