<?php

require_once('File.php');

class FileTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function データをすべて読み込む()
	{
		$file = new File('data/test.txt');
		$this->assertEquals(['5', 'North', 'North', 'East', 'South', 'West', '0'], $file->read());
	}
}
