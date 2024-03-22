#!/usr/bin/php
<?php

if ($argc < 2 || !file_exists($argv[1]))
    die("usage: scan-country.php <file> [-html]\n");

require __DIR__ . "/../include/language/detector.php";
require __DIR__ . "/../include/language/compat-minimal.php";

$html = (@$argv[2] == '-html') ? true : false;

$data = file_get_contents($argv[1]);
if (!$html)
    $data = sp_strip_tags_minimal($data);

$detector = Polskieai_Language_Detector::getInstance();
$country = $detector->detect($data);

echo "$country\n";
