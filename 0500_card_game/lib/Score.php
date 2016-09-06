<?php

class Score
{
	public function __construct()
	{
		$this->score = 0;
	}
	public function add($score)
	{
		if(!is_numeric($score)){
			return 'error:not integer';
		}
		$this->score += $score;

	}
	public function result()
	{
		return $this->score;
	}
}
