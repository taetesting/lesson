<?php
/*
 * DESIGN PATTERN
 * CREATIONAL PATTERN : BUILDER
 *
 */
require __DIR__ . '/../../../vendor/autoload.php';
// header('Content-Type: text/plain');

use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\HTMLPageBuilder;
use Zinio\DesignPatterns\CreationalPatterns\Builder\Example1\HTMLPageDirector;

 writeln('BEGIN TESTING BUILDER PATTERN');
  writeln('');

  $pageBuilder = new HTMLPageBuilder();
  $pageDirector = new HTMLPageDirector($pageBuilder);
  $pageDirector->buildPage();
  $page = $pageDirector->GetPage();
  writeln($page->showPage());
  writeln('');
 
  writeln('END TESTING BUILDER PATTERN');

  function writeln($line_in) {
    echo $line_in.'<br/>';
  }

?>