<?php
namespace Zinio\DesignPatterns\CreationalPatterns\Builder\Example1;

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\HTMLPage;

class HTMLPage
{
    private $page = NULL;
    private $pageTitle = NULL;
    private $pageHeading = NULL;
    private $pageText = NULL;

    public function __construct()
    {
    }

    public function showPage()
    {
        return $this->page;
    }

    public function setTitle($titleIn)
    {
        $this->pageTitle = $titleIn;
    }

    public function setHeading($headingIn)
    {
        $this->pageHeading = $headingIn;
    }

    public function setText($textIn)
    {
        $this->pageText .= $textIn;
    }

    public function formatPage()
    {
       $this->page  = '<html>';
       $this->page .= '<head><title>'.$this->pageTitle.'</title></head>';
       $this->page .= '<body>';
       $this->page .= '<h1>'.$this->pageHeading.'</h1>';
       $this->page .= $this->pageText;
       $this->page .= '</body>';
       $this->page .= '</html>';
    }
}