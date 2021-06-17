<?php
require_once "model/bookManager.php";
require "model/entity/book.php";


// Suppression d'un livre
if (isset($_GET["book_id"]) && !empty($_GET["book_id"])) {
    $bookDelete = new BookManager();
    $result = $bookDelete->deleteBook($_GET["book_id"]);
}

if(!$result) {
    $error ="The book is no longer exist";
  }
include "view/bookView.php";