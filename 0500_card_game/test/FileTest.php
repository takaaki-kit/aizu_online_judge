<?php

require_once('File.php');
require_once('Helper/base.php');

class FileTest extends Test_Base
{
	public function test_全てのデータを返す()
	{
		$this->assertEquals(['2', '6 2', '3 4'], (new File(self::FILE_PATH))->read());
	}
}
