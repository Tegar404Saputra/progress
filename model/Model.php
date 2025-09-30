<?php
require_once 'model/Book.php';

class Model {
    public function getBookList() {
        return [
            "jungle book" => new Book('jungle book', 'George Orwell', 'A dystopian novel set in a totalitarian society.'),
            "to kill a mockingbird" => new Book('To Kill a Mockingbird', 'Harper Lee', 'A novel about racial injustice in the Deep South.'),
            "the great gatsby" => new Book('The Great Gatsby', 'F. Scott Fitzgerald', 'A critique of the American Dream set in the Jazz Age.')
        ];
    }
    
    public function getBook($title) {
        $allBooks = $this->getBookList();
        return $allBooks[$title];
    }
}