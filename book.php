<?php
require_once "model/bookManager.php";
require "model/entity/book.php";


// Controleur qui gère l'affichage du détail d'un livre
// Check url parameter and redirect if not present
if (!isset($_GET["book_id"]) || empty($_GET["book_id"])) {
    header("Location: index.php");
}
// If id is in url sanitize it and get the matching account with the operations
$book_id = filter_var($_GET["book_id"], FILTER_SANITIZE_NUMBER_INT);
$bookSingle = new BookManager();
$book = $bookSingle->getBook(htmlspecialchars($_GET["book_id"]));

// If not book matched the id make an error message
if(!$book) {
    $error ="Sorry, we can't find your book. It might not exist or have been deleted";
  }

// Suppression d'un livre
// if (isset($_GET["book_id"]) && !empty($_GET["book_id"])) {
    // $bookDelete = new BookManager();
    // $result = $bookDelete->deleteBook($_GET["book_id"]);
// }

// if(!$result) {
    // $error ="The book is no longer exist";
//   }
include "view/bookView.php";