<?php

require_once "dataBase.php";


class userManager extends DataBase {

  private PDO $db;

  // Récupère tous les utilisateurs
  public function getUsers() {
    $query = $this->db->prepare(
      "SELECT * 
      FROM User"
      );
    $query->execute();
    $users = $query -> fetchAll(PDO::FETCH_ASSOC);
      foreach ($users as $key => $user) {
        $users[$key] = new User($user);
      }
      return $users;
    }



  // Récupère un utilisateur par son id
  public function getUserById(){}
   

  // Récupère un utilisateur par son code personnel
  public function getUser() {}
    
  public function __construct() {
    $this->db = DataBase::getDB();
}
}
