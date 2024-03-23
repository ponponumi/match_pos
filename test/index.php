<?php

require_once __DIR__ . "/../vendor/autoload.php";

$text = "878 re 882 885 985 fr4 57";
preg_match_all('/\d+/', $text, $matches);

$numbers = $matches[0];

var_dump($numbers);
