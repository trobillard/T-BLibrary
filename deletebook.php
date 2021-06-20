<?php
require_once "model/bookManager.php";
require "model/entity/book.php";


// Suppression d'un livre
if (isset($_GET["book_id"]) && !empty($_GET["book_id"])) {
    $bookDelete = new BookManager();
    $result = $bookDelete->deleteBook($_GET["book_id"]);

// redirection sur une autre page
if($result) {
  header("Location: books.php");
  exit();
}
}
include "view/bookView.php";