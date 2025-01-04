<?php

class Book {
    // Private properties for the title of the book and the number of available copies
    private $title;
    private $availableCopies;

    // Constructor to initialize the book's title and available copies
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the number of available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book, decreasing the available copies by 1
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book, increasing the available copies by 1
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property for the member's name
    private $name;

    // Constructor to initialize the member's name
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method for a member to borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            echo "{$this->name} borrowed \"{$book->getTitle()}\".\n";
        } else {
            echo "\"{$book->getTitle()}\" is not available for borrowing.\n";
        }
    }

    // Method for a member to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned \"{$book->getTitle()}\".\n";
    }
}

// Usage

// Creating 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Creating 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member One borrows Book 1
$member1->borrowBook($book1);

// Member Two borrows Book 2
$member2->borrowBook($book2);

// Displaying available copies
echo "Available Copies:\n";
echo "\"{$book1->getTitle()}\": {$book1->getAvailableCopies()} copies\n";
echo "\"{$book2->getTitle()}\": {$book2->getAvailableCopies()} copies\n";

// Members return the books
$member1->returnBook($book1);
$member2->returnBook($book2);

// Displaying available copies again
echo "Available Copies after return:\n";
echo "\"{$book1->getTitle()}\": {$book1->getAvailableCopies()} copies\n";
echo "\"{$book2->getTitle()}\": {$book2->getAvailableCopies()} copies\n";
?>
