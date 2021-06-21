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

  // Ajoute un nouveau user
  public function addUser(User $adduser) {
    $query = $this->db->prepare(
      "INSERT INTO user(lastname, firstname, birth_date, city_code, city, adress, phone, email, library_number)
      VALUES (:lastname, :firstname, :birth_date, :city_code, :city, :adress, :phone, :email, :library_number)"
    );
    $result = $query->execute([
      "lastname"=>$adduser->getLastName(),
      "firstname"=>$adduser->getFirstName(),
      "birth_date"=>$adduser->getBirth_Date(),
      "city_code"=>$adduser->getCity_Code(),
      "city"=>$adduser->getCity(),
      "adress"=>$adduser->getAdress(),
      "phone"=>$adduser->getPhone(),
      "email"=>$adduser->getEmail(),
      "library_number"=>$adduser->getLibrary_Number()
    ]);
    return $result;
  }

// Supprime un utilisateur
public function deleteUser(int $id):bool {
  $query = $this->db->prepare(
    "DELETE
    FROM User
    WHERE id = :id"

  );
  $result = $query->execute([
    "id" => $id
  ]);
 
  return $result;
}

  public function __construct() {
    $this->db = DataBase::getDB();
}
}
