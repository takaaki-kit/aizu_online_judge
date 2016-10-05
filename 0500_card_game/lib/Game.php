<?php

require_once('Score.php');
require_once('Buttle.php');

class Game
{
	public function __construct($input)
	{
		$this->input = $input;
	}
	public function start()
	{
		if($this->is_correct_number_of_cards($this->input)){
			return 'illegal number of cards';
		}

		$A_score = new Score();
		$B_score = new Score();

		foreach($this->input as $buttle_cards){
			(new Buttle($buttle_cards, $A_score, $B_score))->run();
		}

		return $A_score->result() . ' ' . $B_score->result();
	}

	private function is_correct_number_of_cards($input)
	{
		return intval(array_shift($this->input))!= count($this->input);
	}
}
