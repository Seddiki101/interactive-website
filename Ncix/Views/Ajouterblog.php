<?php
require_once "../Controller/sujetc.php";
require_once "../Controller/blogC.php";
require_once "../Model/sujet.php";
require_once "../Model/blog.php";
require_once "../config.php";


$sujetc = new sujetc();



   
// if (isset($_POST["submit"])) {
    $var = (int)$_GET['id'] ;
    
      
       $blog = new blog(

		$_POST['name'],
		$_POST['email'],
		$_POST['message'],
        $var
          
       );


      
       
       $blogc = new blogC();
       $blogc->ajouterblog($blog);
    
        header("Location:sujetdetails.php?id=$var");
    // }


?>
