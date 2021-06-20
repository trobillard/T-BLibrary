<?php
// Controlleur qui gérer l'affichage de tous les livres
require_once "model/bookManager.php";
require "model/entity/book.php";


$allBooks = new BookManager();
$books = $allBooks->getBooks();

require "view/booksView.php";

?>
