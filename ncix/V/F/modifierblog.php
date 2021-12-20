<?php
    include_once 'B:\apps\xampp\htdocs\ncix\M\blog.php';
    include_once 'B:\apps\xampp\htdocs\ncix\C\blogC.php';

    $error = "";

    // create blog
    $adherent = null;

    // create an instance of the controller
    $blogC = new blogC();
    if (
        isset($_POST["id"]) &&
		isset($_POST["nom"]) &&		
        isset($_POST["email"]) && 
        isset($_POST["comment"])
    ) {
        if (
            !empty($_POST["id"]) && 
			!empty($_POST['nom']) &&
            !empty($_POST["email"]) && 
            !empty($_POST["comment"])
        ) {
            $blog = new blog(
                $_POST['id'],
				$_POST['nom'], 
                $_POST['email'],
                $_POST['comment']
            );
            $blogC->modifierblog($blog, $_POST["id"]);
            header('Location:afficherblog.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>
    <body>
        <button><a href="afficherListeBlog.php">Retour à la liste des blogs</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['id'])){
				$blog = $blogC->recupererblog($_POST['id']);
				
		?>
        
        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Numéro blog:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id" value="<?php echo $blog['id']; ?>" maxlength="20"></td>
                </tr>
               
				<tr>
                    <td>
                        <label for="nom">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $blog['nom']; ?>" maxlength="20"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="email">Adresse mail:
                        </label>
                    </td>
                    
                    <td>
                        <input type="email" name="email" id="email" value="<?php echo $blog['email']; ?>">
                    </td>
                   
                </tr>
                <tr>
                    <td>
                        <label for="comment">Comment :
                        </label>
                    </td>
                    <td>
                        <input type="text" name="comment" id="comment" value="<?php echo $blog['comment']; ?>">
                    </td>
                    <p id="errorComment" class="error"></p>
                </tr>              
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>