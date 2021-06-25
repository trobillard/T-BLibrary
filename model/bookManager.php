<?php
require "dataBase.php";

class BookManager extends DataBase{

    private PDO $db;

  // Récupère tous les livres
  public function getBooks(){
    $query = $this->db->prepare (
      "SELECT book.*,
      concat(user.lastname,' ',user.firstname) AS fullname 
      FROM Book 
      LEFT JOIN User 
      ON Book.user_id = User.id "
    );
    $query->execute([]);
    $books = $query -> fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key => $book) {
      $books[$key] = new Book($book);
    }
    return $books;
  }
  
  // Récupère un livre
  public function getBook(int $book_id):Book {
    $query = $this->db->prepare (
      "SELECT *
      FROM Book
      WHERE book_id = :book_id"
    );
    $query->execute([
    "book_id" => $book_id
    ]);
    $data = $query -> fetchAll(PDO::FETCH_ASSOC);
    $book = new Book($data[0]);
    return $book;
  }

  // Ajoute un nouveau livre
  public function addBook(Book $addbook) {
    $query = $this->db->prepare(
      "INSERT INTO book(title, author, summary, publication_date, category)
      VALUES (:title, :author, :summary, :publication_date, :category)"
    );
    $result = $query->execute([
      "title"=>$addbook->getTitle(),
      "author"=>$addbook->getAuthor(),
      "summary"=>$addbook->getSummary(),
      "publication_date"=>$addbook->getPublication_date(),
      "category"=>$addbook->getCategory(),
    ]);
    return $result;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(Book $book) {
    $query = $this->db->prepare(
      "UPDATE book
      SET user_id = :user_id
      WHERE book_id = :book_id"
    );
    $result = $query->execute([
      "user_id" => $book->getUser_Id(),
      "book_id" => $book->getBook_Id()
    ]);
    return $result;
  }
  // Supprime un livre
  public function deleteBook(int $book_id):bool {
    $query = $this->db->prepare(
      "DELETE
      FROM Book
      WHERE book_id = :book_id"
  
    );
    $result = $query->execute([
      "book_id" => $book_id
    ]);
   
    return $result;
  }


  public function __construct() {
    $this->db = DataBase::getDB();
}
}
