<?php
require_once "model/userManager.php";
require "model/entity/user.php";


// Suppression d'un livre
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    $userDelete = new UserManager();
    $result = $userDelete->deleteUser($_GET["id"]);

// redirection sur une autre page
if($result) {
  header("Location: users.php");
  exit();
}
}
include "view/userView.php";