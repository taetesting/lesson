<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example1;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\AbstractPageBuilder;

class HTMLPageBuilder extends AbstractPageBuilder
{
    private $page = NULL;
    
    public function __construct()
    {
        $this->page = new HTMLPage();
    }

    public function setTitle($titleIn)
    {
        $this->page->setTitle($titleIn);
    }

    public function setHeading($headingIn)
    {
        $this->page->setHeading($headingIn);
    }

    public function setText($textIn)
    {
        $this->page->setText($textIn);
    }

    public function formatPage()
    {
        $this->page->formatPage();
    }

    public function getPage()
    {
        return $this->page;
    }
}