<?php
require_once "model/userManager.php";
require "model/entity/user.php";

// Controleur qui gère l'affichage du détail d'un utilisateur
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $userSingle = new userManager();
    $user = $userSingle->getUserById(htmlspecialchars($_GET["id"]));
}

if (isset($_GET["library_number"]) && !empty($_GET["library_number"])) {
    $userSingle = new userManager();
    $user = $userSingle->getUser(htmlspecialchars($_GET["library_number"]));
}



include "view/userView.php";