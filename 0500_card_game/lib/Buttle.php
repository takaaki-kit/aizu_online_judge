<?php

class Buttle
{
	public function __construct($cards, $A_score, $B_score)
	{
		$this->cards = $cards;
		$this->A_score = $A_score;
		$this->B_score = $B_score;
	}
	public function run()
	{
		$this->cards = explode(' ', $this->cards);
		if($this->is_A_card_larger_than_B_card()){
			$this->A_score->add($this->winners_score());
		}else if($this->is_B_card_larger_than_A_card()){
			$this->B_score->add($this->winners_score());
		}else if($this->is_equal_A_card_to_B_card()){
			$this->A_score->add($this->draw_score());
			$this->B_score->add($this->draw_score());
		}
	}

	private function is_A_card_larger_than_B_card()
	{
		return $this->cards[0] > $this->cards[1];
	}

	private function is_B_card_larger_than_A_card()
	{
		return $this->cards[0] < $this->cards[1];
	}
	private function is_equal_A_card_to_B_card()
	{
		return $this->cards[0] == $this->cards[1];
	}

	private function winners_score()
	{
		return $this->cards[0] + $this->cards[1];
	}

	private function draw_score()
	{
		return $this->cards[0];
	}
}
