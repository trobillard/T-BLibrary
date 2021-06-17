<?php
require "dataBase.php";

class bookManager extends DataBase{

    private PDO $db;

  // Récupère tous les livres
  public function getBooks(){
    $query = $this->db->prepare (
      "SELECT *
      FROM book"
    );
    $query->execute();
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
      "category"=>$addbook->getCategory()
    ]);
    return $result;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus() {

  }

  public function __construct() {
    $this->db = DataBase::getDB();
}
}