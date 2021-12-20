<?php

require_once 'B:\apps\xampp\htdocs\ncix\C\RoleC.php';
require_once 'B:\apps\xampp\htdocs\ncix\M\Role.php';

$role = new Role("houssem");

$roleC = new RoleC();


// $roleC->supprimerrole(259);
$roleC->ajouterrole($role);
// $roleC->modifierrole($role, 123);

// var_dump($roleC->recupererrole(260));

// var_dump($roleC->afficherroles()->fetchAll()); 




?>