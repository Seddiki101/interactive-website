<?php
include_once("config.php");
include_once("../../M/livraison.php");
class livraisonC
{
    function afficherLivraison(){
        $sql="select * from livraison";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
public function ajouterLivraison($livraison){
    $sql="insert into livraison(adresse,dateL,prix,livreur) values(:adresse,:dateL,:prix,:livreur)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        
        'adresse'=>$livraison->getAdresse(),
        'dateL'=>$livraison->getDateL(),
        'prix'=>$livraison->getPrix(),
        'livreur'=>$livraison->getLivreur()
       
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}



public function statistiques()
{
    $sql="SELECT livreur,count(*) from livraison group by livreur ";
    
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}


public function afficherLivraisonDetail(int $rech1)
    {
        $sql="select * from livraison where idL=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
public function supprimerLivraison($id)
{
    $sql = "DELETE FROM livraison WHERE idL=".$id."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
function afficherLivraisonJoin(){
    $sql="select * from livraison inner join livreur on livraison.livreur=livreur.nom";
        
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
function modifierLivraison($id,$livraison) {
    $sql="UPDATE livraison set adresse=:adresse,dateL=:dateL,prix=:prix,livreur=:livreur where idL=".$id."";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
    
        $query->execute([
            'adresse' => $livraison->getAdresse(),
            'dateL' => $livraison->getDateL(),
            'prix' => $livraison->getPrix(),
            'livreur'=>$livraison->getLivreur()
        ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }		
  }
}

?>