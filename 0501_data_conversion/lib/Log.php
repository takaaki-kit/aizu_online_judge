<?php

class Log
{
    public function __construct($data, $rules, $start_line)
    {
        $this->data = $data;
        $this->rules = $rules;
        $this->start_line = $start_line;
    }

    public function output()
    {
        $result = [];
        $i = $this->start_line ;
        while(isset($this->data[$i])){
            if(isset($this->rules[$this->data[$i]])){
                $this->data[$i] = $this->rules[$this->data[$i]];
            }
            $result[] = $this->data[$i];
            $i++;
        }

        return $result;
    }
}
