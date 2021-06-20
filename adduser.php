<?php
require_once "model/userManager.php";
require "model/entity/user.php";
include "view/addUserView.php";

$userToAdd = new UserManager();
if(isset($_POST) && !empty($_POST)){
    $newUser = new User($_POST);
    $result = $userToAdd->addUser($newUser);

    if($result) {
      echo "<script language='javascript'>";
      echo "alert('New user has been added successfully');";
      echo "</script>";
      }
     
}

?>
