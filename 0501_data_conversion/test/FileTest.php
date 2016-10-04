<?php

require('File.php');

class FileTest extends PHPUnit_Framework_TestCase
{
    public function test_入力データを読み込んで返す()
    {
        $file = new File('data/testinput.txt');
        $this->assertEquals(['3', 'aho AHO', 'boke BOKE', 'kasu KASU', '5', 'aho', 'Boke', 'kasU', 'boke', 'kasu'], $file->read());
    }
}
