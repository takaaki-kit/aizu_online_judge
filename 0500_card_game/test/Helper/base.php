<?php

class Test_Base extends PHPUnit_Framework_TestCase
{
	const FILE_PATH = 'test/data/input.txt';

	protected function setUp()
	{
		parent::setUp();
		$this->delete_file();
	}

	#protected function tearDown()
	#{
	#	parent::tearDown();
	#	$this->delete_file();
	#}
	#
	private function delete_file()
	{
		if(file_exists(self::FILE_PATH)){
			unlink(self::FILE_PATH);
		}
	}
}
