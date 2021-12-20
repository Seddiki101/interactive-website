<?php
class sujet
{
    private  $idsujet = null;
    private $titresujet = null;
    private  $contenu = null;
    private $image = null;
    
    function __construct(string $titre,string $contenu,string $image)
    {
        $this->titresujet=$titre;
        $this->contenu=$contenu;
        $this->image=$image;   
    }
    function getidsujet():int
    {
        return $this->idsujet;
    }
    function gettitresujet():string
    {
        return $this->titresujet;
    }
    function getimage():string
    {
        return $this->image;
    }
    function getcontenu():string
    {
        return $this->contenu;
    }
    


    function settitresujet(string $titre)
    {
        $this->titresujet=$titre;
    }
    function setcontenu(string $contenu)
    {
        $this->contenu=$contenu;
    }

    function setimage(string $image)
    {
        $this->image=$image;
    }
    
}
?>
