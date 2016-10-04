<?php

class Rule
{
    public function __construct($contents)
    {
        $this->contents = $contents;
    }

    public function get_number_of_conversations()
    {
        return $this->contents[0];
    }

    public function get_conversations()
    {
        for($i = 1; $i <= $this->get_number_of_conversations(); $i++){
            $line = explode(' ', $this->contents[$i]);
            $key = $line[0];
            $value = $line[1];
            $rules[$key] = $value;
        }
        return $rules;
    }

    public function get_start_line_of_analysis()
    {
        return $this->get_number_of_conversations() + 2;
    }
}
