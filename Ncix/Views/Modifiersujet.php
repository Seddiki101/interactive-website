<?php
require_once "../Controller/sujetc.php";
require_once "../Model/sujet.php";

$sujetc = new sujetc();
if(isset($_GET["id"]))
{
    $id = $_GET["id"] ;
    $sujetc = new sujetc();
    $selectedsujet = $sujetc->getsujet($id);
    
}
else 
{   $var = (int)$_POST['id'] ;
    $sujet = new sujet(  
        $_POST['titresujet'],
        $_POST['contenu'],
        $_POST['image']
    );
    $selectedsujet = $sujetc->getsujet($var);
    
     $sujetc->modifiersujet($sujet , $var);
     $selectedsujet = $sujetc->getsujet( $var);

     header("Location:Affichersujet.php");
    //exit();
}
?>


<!Doctype html>
<html lang="en">


<form action="Modifiersujet.php" method="POST">
        <br>          

        <div class="container-fluid">
            <div class="text-center">
            <div class="form-group">
                    <div class="form-row">
                        <label class="col-md-5" for="nom">ID : </label>
                        <div class="col-md-4">
                        <input type="text" class="form-control" name="id" value="<?php echo $selectedsujet['id']; ?>" readonly>                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <label class="col-md-5" for="nom">Title of subject : </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="titresujet" value="<?php echo $selectedsujet['titresujet'] ;?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                              <input type="file"    name="image" value="<?php echo $selectedsujet['image']; ?>"/>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <label class="col-md-5" for="nom">Subject :  </label>
                        <div class="col-md-4">
                            <textarea name="contenu" placeholder="" ><?php echo $selectedsujet['contenu'] ;?></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <label class="col-md-5" for="nom"></label>
                        <div class="col-md-4">
                        <button class="btn btn-primary" name="submit">Update </button>                        </div>
                    </div>
                </div>


            </div>
        </div>
        </form>


</html>

