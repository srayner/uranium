<?php

namespace Application\Service;

class Settings
{
    private $path;
    
    public function __construct($path)
    {
        $this->path = $path;
    }

    public function load($name)
    {
        $filename = $this->path . $name . '.json';
        return json_decode(file_get_contents($filename, false));
    }
    
    public function persist($name, $value)
    {
        $filename = $this->path . $name . '.json';
        file_put_contents($filename, json_encode($value));
    }
}