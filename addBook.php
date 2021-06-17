<?php
require_once "model/bookManager.php";
require "model/entity/book.php";
include "view/addBookView.php";

$bookToAdd = new BookManager();
if(isset($_POST) && !empty($_POST)){
    $newBook = new Book($_POST);
    $result = $bookToAdd->addBook($newBook);
}

?>