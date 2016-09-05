<?php

require_once('File.php');

class FileTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp();
		if(file_exists('data/input.txt')){
			unlink('data/input.txt');
		}
	}

	public function tearDown()
	{
		parent::tearDown();
		if(file_exists('data/input.txt')){
			unlink('data/input.txt');
		}
	}

	public function test_全てのデータを返す()
	{
		(new File('data/input.txt'))->write(['5 2']);
		$this->assertEquals(['5 2'], (new File('data/input.txt'))->read());
	}
}
