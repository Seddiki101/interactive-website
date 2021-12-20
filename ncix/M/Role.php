<?php
	// class Role{
	// 	private $id_role=null;
	// 	private $type=null;
		
	// 	function __construct($id_role, $type){
	// 		$this->id_role=$id_role;
	// 		$this->type=$type;
			
	// 	}
	// 	function getid_role(){
	// 		return $this->id_role;
	// 	}
	// 	function gettype(){
	// 		return $this->type;
	// 	}
	// 	function setid_role(string $id_role){
	// 		$this->id_role=$id_role;
	// 	}
	// 	function settype(string $type){
	// 		$this->type=$type;
	// 	}
		
		
	// }
	class Role{
		private $id_role=null;
		private $type=null;
		
		function __construct( $type){
			$this->type=$type;
			
		}
		function getid_role(){
			return $this->id_role;
		}
		function gettype(){
			return $this->type;
		}
		function setid_role(string $id_role){
			$this->id_role=$id_role;
		}
		function settype(string $type){
			$this->type=$type;
		}
		
		
	}


?>