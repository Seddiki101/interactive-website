<?php
require_once "..\..\C\sujetc.php";
require_once "..\..\C\blogC.php";
//require_once "..\..\M\sujet.php";
require_once "..\..\M\blog.php";
require_once "..\..\C\config.php";


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
