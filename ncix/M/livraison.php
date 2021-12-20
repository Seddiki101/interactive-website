<?php
class livraison{
    private const idL = null;
    private const adresse = null;
    private const dateL = null;
    private const prix = null;
    private const livreur = null;
    function __construct(string $adresse,string $dateL,float $prix,string $livreur)
    {
        
        $this->adresse=$adresse;
        $this->dateL=$dateL;
        $this->prix=$prix;
        $this->livreur=$livreur;
    }
    function getIdL(): int{
        return $this->idL;
    }
    function getAdresse(): string{
        return $this->adresse;
    }
   
    function getDateL(): string{
        return $this->dateL;
    }
    
    function getPrix(): float{
        return $this->prix;
    }

   function getLivreur(): string{
        return $this->livreur;
    }
    function setAdresse(string $adresse): void{
        $this->adresse=$adresse;
    }
    
    function setDateL(string $dateL): void{
        $this->dateL=$dateL;
    }
    function setPrix(float $prix): void{
        $this->prix=$prix;
    }
    function setLivreur(string $livreur): void{
        $this->livreur=$livreur;
    }
   
}
?>