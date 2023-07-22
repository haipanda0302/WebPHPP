<?php

include_once('Book.php');

class BookList {

    public $books = [];
    
    public function addBook($book) {
        array_push($books,$book);
    }

    public function getAllBook(){
        return $books;
    }
}
?>