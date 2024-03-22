#!/usr/bin/php
<?php

if ($argc < 3 || !file_exists($argv[1]))
    die("usage: count-foreign-words.php <file> <language> [-html]\n");

require __DIR__ . "/../include/language/detector.php";
require __DIR__ . "/../include/language/compat-minimal.php";

$html = (@$argv[3] == '-html') ? true : false;

$data = file_get_contents($argv[1]);
if (!$html)
    $data = sp_strip_tags_minimal($data);

$detector = Polskieai_Language_Detector::getInstance();
$count = $detector->countWords($data, $argv[2]);

echo "$count\n";
