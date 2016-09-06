<?php

require_once('Score.php');
require_once('Helper/base.php');

class ScoreTest extends Test_Base
{
	public function test_得点を加算する()
	{
		$score = new Score();
		$score->add(10);
		$this->assertEquals('10', $score->result());
	}

	public function test_文字列の加算はエラーとなる()
	{
		$score = new Score();
		$this->assertEquals('error:not integer', $score->add('a'));
	}
}
