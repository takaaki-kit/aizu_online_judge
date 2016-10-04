<?php

class File
{
    private $filepath;

    public function __construct($filepath)
    {
        $this->filepath = $filepath;
    }

    public function read()
    {
        $fp = fopen($this->filepath, 'r');
        while($line = fgets($fp)){
            $contents[] = trim($line);
        }
        fclose($fp);
        return $contents;
    }
}
