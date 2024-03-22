<?php

class Polskieai_Language_Detector
{
    protected $words = array();

    // true -> case-sensitive
    protected $countries = array (
        'pl' => false,
        'en' => false,
        'es' => false,
        'nl' => false,
        'pt' => false,
        'hr' => false,
        'sk' => false,
        'tr' => false,
        'ua' => true,
        'ru' => true,
    );


    private static $instance = null;
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new Polskieai_Language_Detector;
        }
        return self::$instance;
    }


    public function __construct()
    {
        $path = __DIR__ . "/../../data/words";
        foreach ($this->countries as $country => $foo) {
            $this->words[$country] = file("$path/$country.txt", FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
        }
    }


    public function countWords($string, $country)
    {
        $count = 0;
        $sensitive = $this->countries[$country];

        foreach ($this->words[$country] as $keyword) {
            $pos = $sensitive ? strpos($string, $keyword) : stripos($string, $keyword);
            if ($pos !== false) {
                $count++;
            }
        }

        return $count;
    }


    public function detect($string)
    {
        $matched = array();

        foreach ($this->words as $country => $keywords) {
            $count = $this->countWords($string, $country);
            if ($count) {
                $matched[$country] = $count;
            }
        }

        if (!empty($matched)) {
            $maxVal = max($matched);
            return array_search($maxVal, $matched);
        }

        return false;
    }
}
