<?php
class livreur{
    private const id = null;
    private const nom = null;
    private const type = null;
    private const numtel = null;
    private const prenom = null;
    private const email = null;
    function __construct(string $nom,string $prenom,string $email,string $type,int $numtel)
    {
        
        $this->nom=$nom;
        $this->type=$type;
        $this->numtel=$numtel;
        $this->prenom=$prenom;
        $this->email=$email;
    }
    function getId(): int{
        return $this->id;
    }
    function getType(): string{
        return $this->type;
    }
    function getPrenom(): string{
        return $this->prenom;
    }
    function getEmail(): string{
        return $this->email;
    }
    function getNom(): string{
        return $this->nom;
    }
    
    function getNumtel(): int{
        return $this->numtel;
    }
  
    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    
    function setType(string $type): void{
        $this->type=$type;
    }
    function setNumtel(int $numtel): void{
        $this->numtel=$numtel;
    }
   
}
?>