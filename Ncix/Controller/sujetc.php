<?php
require_once 'C:/xampp/htdocs/blog/Ncix/config.php';
require_once "C:/xampp/htdocs/blog/Ncix/model/sujet.php";

class sujetc
{
    function affichersujet()
    {   $pdo=config::getConnexion();
        try 
        {
            $query = $pdo->prepare('select * from sujet');
            $query->execute();
            $result = $query->fetchALL();
            return $result;
        }
        catch(Exception $e)
        {
            die('erreur :'.$e->getMessage());
        }

    }
    
    function ajoutersujet(sujet $sujet)
    {
        
        $pdo = config::getConnexion();
        try 
        {

            $query = $pdo->prepare('insert into sujet (titresujet,contenu,image) values (:titresujet,:contenu,:image)');
            $query->execute(['titresujet' => $sujet->gettitresujet(),
            'contenu' => $sujet->getcontenu(),
            'image' => $sujet->getimage()]);
        }
        catch(Exception $e)
        {
        die('Erreur: '.$e->getMessage());
        }
        
    }
   
   
    function supprimersujet(int $id)
    {
        $pdo = config::getConnexion();
        try 
        {
            $query = $pdo->prepare('delete from sujet where id = :id');
            $query->execute(['id' => $id]);
        }
        catch(Exception $e)
        {
        die('Erreur: '.$e->getMessage());
        }   
    }
    
   
   



  
    function modifiersujet(sujet $sujet ,int $id)
    {
        $pdo = config::getConnexion();
        try {

        $query = $pdo->prepare('UPDATE sujet SET 
        titresujet = :titresujet, 
        contenu = :contenu,
        image= :image
        WHERE id = :id  ');

        $query->execute(['titresujet' => $sujet->gettitresujet(),
        'contenu' => $sujet->getcontenu(),
        'image' => $sujet->getimage(),
        'id' => $id]);
         }
         catch(Exception $e)
        {
        die('Erreur: '.$e->getMessage());
        }
       
    }
  
  
    function getsujet(int $id)
    {
        $pdo = config::getConnexion();
        try {

        $query = $pdo->prepare('SELECT * FROM sujet where id = :id');

        $query->execute(['id'=>$id]);
        $result = $query->fetch();
        return $result ;
        }
        catch(Exception $e)
        {
        die('Erreur: '.$e->getMessage());
        }
    }

    function incremateviews(int $id,int $count, String $type)
    {
        $pdo = config::getConnexion();
        try {
            $count = $count +1;
        $query = $pdo->prepare("UPDATE sujet SET 
            $type = :views WHere id=:id
         ");

        $query->execute(['id' => $id,
        'views' => $count]);
         }
         catch(Exception $e)
        {
        die('Erreur: '.$e->getMessage());
        }
    }
    function searchSujetByName(String $titre)
    {   $pdo=config::getConnexion();
        try 
        {
            $query = $pdo->prepare('select * from sujet where titresujet = :titre');
            $query->execute(['titre' => $titre]);
            $result = $query->fetchALL();
            return $result;
        }
        catch(Exception $e)
        {
            die('erreur :'.$e->getMessage());
        }

    }



}
?>