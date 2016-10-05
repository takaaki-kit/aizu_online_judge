<?php

require_once('Analysis.php');

class AnalysisTest extends PHPUnit_Framework_TestCase
{
	/** @test */
	public function サイコロの操作数を取得する()
	{
		$dice = new Dice();
		$contents = (new File('data/test.txt'))->read();
		$this->assertEquals('5', (new Analysis($contents, $dice))->get_number_of_operations());
	}

	/** @test */
	public function サイコロを操作する()
	{
		$dice = new Dice();
		$contents = (new File('data/test.txt'))->read();
		$analysis = new Analysis($contents, $dice);
		$analysis->start();
		$this->assertEquals(21, $analysis->get_result());
	}

	/** @test */
	public function サイコロを操作する2()
	{
		$dice = new Dice();
		$contents = (new File('data/test2.txt'))->read();
		$analysis = new Analysis($contents, $dice);
		$analysis->start();
		$this->assertEquals(34, $analysis->get_result());
	}
}
