<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Singleton;

use Zinio\DesignPatterns\CreationalPatterns\Singleton\BookSingleton;

class BookBorrower
{
    private $borrowedBook;
    private $haveBook = false;

    public function __construct()
    {

    }

    public function getAuthorAndTitle()
    {
        if (true == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndTitle();
        } else {
            return "I don't have the book";
        }
    }

    public function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == null) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }

    public function returnBook()
    {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }
}