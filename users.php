<?php
// Controleur qui gère l'affichage de tous les utilisateurs
// Controlleur qui gérer l'affichage de tous les livres
require_once "model/userManager.php";
require "model/entity/user.php";


$allUsers = new UserManager();
$users = $allUsers->getUsers();

require "view/usersView.php";

?>
