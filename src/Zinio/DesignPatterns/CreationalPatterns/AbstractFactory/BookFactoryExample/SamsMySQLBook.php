<?php
namespace Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample;

use Zinio\DesignPatterns\CreationalPatterns\AbstractFactory\BookFactoryExample\AbstractMySQLBook;

class SamsMySQLBook extends AbstractMySQLBook
{
    private $author;
    private $title;

    public function __construct()
    {
        $this->author = 'Paul Dubois';
        $this->title = 'MySQL, 3rd Edition';
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }
}