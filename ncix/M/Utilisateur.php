<?PHP
	class Utilisateur{
		private  $id = null;
		private  $nom = null;
		private  $prenom = null;
		private  $email = null;
		private  $password = null;
		private $role = null;
		private $img =null;


		function __construct(string $nom, string $prenom, string $email, string $password, $role, string $img){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->password=$password;
			$this->role = $role;
			$this->img=$img;

		}

		function getId(): int{
			return $this->id;
		}
		function getRole(){
			return $this->role;
		}
		function getNom(): string{
			return $this->nom;
		}
		function getPrenom(): string{
			return $this->prenom;
		}
		
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}
		function getImg(): string{
			return $this->img;
		}
        function setNom(string $nom): void{
			$this->nom=$nom;
		}
		function setPrenom(string $prenom): void{
			$this->prenom;
		}
	
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
		function setRole(string $role): void{
			$this->role=$role;
		}
		function setImg(string $img): void{
			$this->img=$img;
		}

	}
?>