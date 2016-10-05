<?php

class Analysis
{
	public function __construct($contents, $dice)
	{
		$this->contents = $contents;
		$this->start_line = 1;
		$this->dice = $dice;
		$this->point = 1;
	}

	public function get_number_of_operations()
	{
		return $this->contents[$this->start_line - 1];
	}
	public function start()
	{
		for($i = $this->start_line; $i <= $this->get_number_of_operations(); $i++){
			if($this->contents[$i] == 'North'){
				$this->dice->north();
			}
			if($this->contents[$i] == 'South'){
				$this->dice->south();
			}
			if($this->contents[$i] == 'East'){
				$this->dice->east();
			}
			if($this->contents[$i] == 'West'){
				$this->dice->west();
			}
			if($this->contents[$i] == 'Right'){
				$this->dice->right();
			}
			if($this->contents[$i] == 'Left'){
				$this->dice->left();
			}
			$this->point += $this->dice->get_top_number();
		}	
		$this->start_line += $this->get_number_of_operations();
	}

	public function get_result()
	{
		return $this->point;
	}
}
