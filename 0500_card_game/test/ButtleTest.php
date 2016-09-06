<?php

require_once('Buttle.php');
require_once('Helper/base.php');
require_once('Score.php');

class ButtleTest extends Test_Base
{
	public function test_大きいカードを出したプレイヤーに得点を加算する()
	{
		$A_score = new Score();
		$B_score = new Score();
		(new Buttle('4 3', $A_score, $B_score))->run();
		$this->assertEquals(7 ,$A_score->result(), 'A');
		$this->assertEquals(0 ,$B_score->result(), 'B');
	}

	public function test_大きいカードを出したプレイヤーに得点を加算する2()
	{
		$A_score = new Score();
		$B_score = new Score();
		(new Buttle('3 4', $A_score, $B_score))->run();
		$this->assertEquals(0 ,$A_score->result(), 'A');
		$this->assertEquals(7 ,$B_score->result(), 'B');
	}

	public function test_カードが同じなら両者に加点する()
	{
		$A_score = new Score();
		$B_score = new Score();
		(new Buttle('3 3', $A_score, $B_score))->run();
		$this->assertEquals(3 ,$A_score->result(), 'A');
		$this->assertEquals(3 ,$B_score->result(), 'B');
	}
}
