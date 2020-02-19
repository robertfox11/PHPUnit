<?php

class Util
{
    protected $text;

    public function __construct($text)
    {
        //con el trim el texto que estamos obteniendo quitar los espacios
        $this->text = $text;
    }
    public function getOrigin()
    {
        return trim($this->text);
    }
    public function convertToSlug()
    {
        //search to space reemplazamos por guiones 
        $util = str_replace(" ", "-", $this->getOrigin());
        //show lower text
        return strtolower($util);
    }
}
