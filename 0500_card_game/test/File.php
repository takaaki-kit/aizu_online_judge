<?php

require_once('File.php');
require_once('Helper/base.php');

class FileTest extends Test_Base
{
	public function test_全てのデータを返す()
	{
		(new File('data/input.txt'))->write(['5 2','3 4']);
		$this->assertEquals(['5 2', '3 4'], (new File('data/input.txt'))->read());
	}
}
