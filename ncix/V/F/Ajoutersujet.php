<?php
require_once "B:\apps\xampp\htdocs\ncix\C\config.php";
require_once "B:\apps\xampp\htdocs\ncix\C\sujetc.php";
require_once "B:\apps\xampp\htdocs\ncix\M\sujet.php";


if(isset($_POST['save'])&& !empty($_POST['titresujet']) && !empty($_POST['contenu']) && !empty($_POST['image']))
{  
    $pdo = config::getConnexion();
    $query = $pdo->prepare('SELECT COUNT(*) FROM sujet WHERE titresujet = ?');
    $query->execute(array($_POST['titresujet']));
if ($query->fetchColumn() != 0) 
{

    header('Location:Ajoutersujet.php');

}
else 
{
    $sujet = new sujet(
    
        $_POST['titresujet'] ,
        $_POST['contenu'] ,
        $_POST['image']
           );
        $sujetc=new sujetc();
        $sujetc->ajoutersujet($sujet);
        
        header("Location:Affichersujet.php");
} 

}
?>


<!Doctype html>
<html lang="en">
            <form action ="Ajoutersujet.php" method="POST">
                <div id = "erreurlog"></div>
                            
                            <h3>titre sujet:</h3>
                            <label for="titresujet"></label><input type="text" name="titresujet" id="titresujet" required minlength="3" maxlength="100" size="10"> <br></br>
                         
                            <h3>Contenu:</h3>
                            <label for="name"></label><input type="contenu" name ="contenu"  >  <br></br>
                    
                            <h3>image:</h3>
                            <label for="name"></label><input type = "file" name = "image"  >  <br></br>
                
                             <input type="submit" name="save" value="submit" class="btn btn-primary waves-effect m-r-15"/>
                </form>  
</html>










