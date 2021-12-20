<?php

require_once 'B:\apps\xampp\htdocs\ncix\C\UtilisateurC.php';

require_once ('B:\apps\xampp\htdocs\ncix\M\Utilisateur.php');

$util = new Utilisateur("ok","houssem","houssem","houssem","houssem",123);
$utilC = new UtilisateurC();

// $utilC->ajouterUtilisateur($util);
// $utilC->supprimerUtilisateur(27);
// $utilC->modifierUtilisateur($util, 28);
// $utilC->modifierUtilisateur($util, 28);

// var_dump($utilC->afficherUtilisateurs()->fetchAll());
// var_dump($utilC->recupererUtilisateur(28));
var_dump($utilC->connexionUser("houssem", "houssem"));
?>