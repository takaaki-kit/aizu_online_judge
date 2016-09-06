<?php

require_once('Game.php');
require_once('Score.php');
require_once('File.php');
require_once('Helper/base.php');

class GameTest extends Test_Base
{
	public function test_両者の得点を出力する()
	{
		$input = (new File(self::FILE_PATH))->read();
		$this->assertEquals('8 7', (new Game($input))->start());
	}

	public function test_指定のカード枚数と実際の枚数が異なる場合はエラー()
	{
		$input = (new File('test/data/illegal_number_of_card.txt'))->read();
		$this->assertEquals('illegal number of cards', (new Game($input))->start());

	}
#	public function test_両者の得点を出力する2()
#	{
#		$input = (new File('data/input2.txt'))->read();
#		$this->assertEquals('9 18', (new Game($input))->start());
#	}
}
