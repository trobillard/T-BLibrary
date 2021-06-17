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
  public function getUserById(int $id):User{
    $query = $this->db->prepare (
      "SELECT *
      FROM User
      WHERE id = :id"
    );
    $query->execute([
    "id" => $id
    ]);
    $data = $query -> fetchAll(PDO::FETCH_ASSOC);
    $user = new User($data[0]);
    return $user;
  }

  // Récupère un utilisateur par son code personnel
  public function getUser(int $library_number):User {
    $query = $this->db->prepare (
      "SELECT *
      FROM User
      WHERE library_number = :library_number"
    );
    $query->execute([
    "library_number" => $library_number
    ]);
    $data = $query -> fetchAll(PDO::FETCH_ASSOC);
    $user = new User($data[0]);
    return $user;
  }

    
  public function __construct() {
    $this->db = DataBase::getDB();
}
}
