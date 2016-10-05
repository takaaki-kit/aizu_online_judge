<?php

require_once('Game.php');

class GameTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function サイコロの操作終了後の結果が帰ってくる()
	{
		$this->assertEquals(21, (new Game())->start());
	}
}
