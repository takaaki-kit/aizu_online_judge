<?php

class Test_Base extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp();
		if(file_exists('data/input.txt')){
			unlink('data/input.txt');
		}
	}

	#public function tearDown()
	#{
	#	parent::tearDown();
	#	if(file_exists('data/input.txt')){
	#		unlink('data/input.txt');
	#	}
	#}
}
