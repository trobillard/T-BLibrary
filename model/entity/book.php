<?php
// Classe représetant les livres stockés en base de données
class Book {
    protected int $book_id;
    protected string $title;
    protected string $author;
    protected string $summary;
    protected string $publication_date;
    protected string $category;
    protected ?int $user_id;
    
    
    public function __construct(?array $data=null) {
        if($data) {
            foreach($data as $key => $value) {
                $setter = "set" . ucfirst($key);
                if(method_exists($this, $setter)) {
                    $this->$setter($value);
                }
            }
        }
    }

    public function setBook_Id(int $book_id) {
        $this->book_id = $book_id;
    }

    public function getBook_Id(){
        return $this->book_id;
    }

    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function getTitle(){
        return $this->title;
    } 

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setSummary(string $summary) {
        $this->summary = $summary;
    }

    public function getSummary(){
        return $this->summary;
    }

    public function setPublication_date(string $publication_date) {
        $this->publication_date = $publication_date;
    }

    public function getPublication_date(){
        return $this->publication_date;
    }

    public function setCategory(string $category) {
        $this->category = $category;
    }

    public function getCategory(){
        return $this->category;
    }


    public function setUser_Id(?int $user_id) {
        $this->user_id = $user_id;
    }

    public function getUser_Id(){
        return $this->user_id;
    }
    
}