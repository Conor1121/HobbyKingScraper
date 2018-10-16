<?php
//test scraper

use duzun\hQuery;

include_once 'vendor/duzun/hquery/hquery.php';

$link = 'https://hobbyking.com/en_us/graphene-1300mah-4s-75c.html';

$HTML = hQuery::fromURL($link, ['Accept' => 'text/html,application/xhtml+xml;q=0.9,*/*;q=0.8']);

$selector = '.std';
$elements = $HTML->find($selector);
$selector2 = 'p';
$elements = $elements->find($selector2);
$selector3 = 'strong';
$elements = $elements->find($selector3);

echo $elements;