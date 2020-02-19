<?php

class Util
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function convertToSlug(){
        //search to space reemplazamos por guiones
        $util = str_replace(" ", "-", $this->text);
        //show lower text
        return strtolower($util);
    }
}