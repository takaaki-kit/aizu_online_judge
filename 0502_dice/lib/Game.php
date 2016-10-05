<?php

class Game
{
	public function start()
	{
		$contents = (new File('data/test.txt'))->read();
		$dice = new Dice();
		$analysis = new Analysis($contents, $dice);
		while($analysis->get_number_of_operations() !=0){
			$analysis->start();
		}
		return $analysis->get_result();
	}
}
