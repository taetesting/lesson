<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Singleton;

class BookSingleton
{
    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title  = 'Design Patterns';
    private static $book = null;
    private static $isLoanedOut = false;

    private function __construct()
    {

    }

    static function borrowBook()
    {
        if (false == self::$isLoanedOut) {
            if (null == self::$book) {
               self::$book = new BookSingleton();
           }
           self::$isLoanedOut = true;
           return self::$book;
        } else {
            return null;
        }
    }

    public function returnBook(BookSingleton $bookReturned)
    {
        self::$isLoanedOut = false;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getAuthorAndTitle()
    {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}