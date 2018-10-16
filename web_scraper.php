<?php

use duzun\hQuery;

include_once 'vendor/duzun/hquery/hquery.php';

//Get battery URLs

$page_num = 6; //Number of pages of batteries on the HobbyKing Site
$URL = 'https://hobbyking.com/en_us/batteries-chargers/batteries.html?limit=150&p=';

$doc = array();

for ($i = 1; $i <= $page_num; $i++){

	$scrape = $URL . (string) $i;
	$HTML = hQuery::fromURL($scrape, ['Accept' => 'text/html,application/xhtml+xml;q=0.9,*/*;q=0.8']);
	array_push($doc,$HTML);

	echo $HTML;

	var_dump($doc->headers);
	var_dump(hQuery::$last_http_result);

}

//Extract links and images
$links = array();
//$images = array();
//$titles = array();

foreach ($doc as $val){

	$elements = $val->find('.-name');

	if ($elements){

		foreach ($elements as $pos => $a){

			array_push($links,$a->attr('href'));
        	//$titles[$pos] = trim($a->text()); // strip all HTML tags and leave just text

		}

	}

}

foreach($links as $link){
	echo $link . "\n";
}




