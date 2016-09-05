<?php

class Test_Base extends PHPUnit_Framework_TestCase
{
	const FILE_PATH = 'data/input.txt';

	public function setUp()
	{
		parent::setUp();
		$this->delete_file();
	}

	#public function tearDown()
	#{
	#	parent::tearDown();
	#	$this->delete_file();
	#}
	#
	private function delete_file()
	{
		if(file_exists('data/input.txt')){
			unlink('data/input.txt');
		}
	}
}
