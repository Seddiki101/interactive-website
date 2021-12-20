<?php

session_start();
//unset($_SESSION['variable_name']);
session_destroy();
header('Location:../V/F/signin.php');
?>