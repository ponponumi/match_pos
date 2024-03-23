<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Ponponumi\MatchPos\Search;

$text = "878 re 882 885 985 fr4 57";
preg_match_all('/\d+/', $text, $matches);

$numbers = $matches[0];

var_dump($numbers);

$single_list = Search::singlebyte($text,$numbers);
var_dump($single_list);

$multi_list = Search::multibyte($text,$numbers);
var_dump($multi_list);
