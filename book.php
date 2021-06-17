<?php
require_once "model/bookManager.php";
require "model/entity/book.php";


// Controleur qui gère l'affichage du détail d'un livre
if (isset($_GET["book_id"]) && !empty($_GET["book_id"])) {
    $bookSingle = new BookManager();
    $book = $bookSingle->getBook(htmlspecialchars($_GET["book_id"]));
}
include "view/bookView.php";