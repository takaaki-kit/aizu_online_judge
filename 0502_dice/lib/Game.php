<?php

require_once('File.php');
require_once('Analysis.php');
require_once('Dice.php');

class Game
{
	public function start()
	{
		$contents = (new File('data/input.txt'))->read();
		$dice = new Dice();
		$analysis = new Analysis($contents, $dice);
		while($analysis->get_number_of_operations() !=0){
			$analysis->start();
		}
		return $analysis->get_result();
	}
}
