<?php

class Dice
{
    private $now_number = array(
        'top' => 1,
        'bottom' => 6,
        'north' => 5,
        'east' => 3,
        'west' => 4,
        'south' => 2
    );

    public function north()
    {
        $new_number['top'] = $this->now_number['south'];
        $new_number['bottom'] = $this->now_number['north'];
        $new_number['east'] = $this->now_number['east'];
        $new_number['west'] = $this->now_number['west'];
        $new_number['north'] = $this->now_number['top'];
        $new_number['south'] = $this->now_number['bottom'];
        $this->update($new_number);
    }

    public function east()
    {
        $new_number['top'] = $this->now_number['west'];
        $new_number['bottom'] = $this->now_number['east'];
        $new_number['east'] = $this->now_number['top'];
        $new_number['west'] = $this->now_number['bottom'];
        $new_number['north'] = $this->now_number['north'];
        $new_number['south'] = $this->now_number['south'];
        $this->update($new_number);
    }

    public function west()
    {
        $new_number['top'] = $this->now_number['east'];
        $new_number['bottom'] = $this->now_number['west'];
        $new_number['east'] = $this->now_number['bottom'];
        $new_number['west'] = $this->now_number['top'];
        $new_number['north'] = $this->now_number['north'];
        $new_number['south'] = $this->now_number['south'];
        $this->update($new_number);
    }

    public function south()
    {
        $new_number['top'] = $this->now_number['north'];
        $new_number['bottom'] = $this->now_number['south'];
        $new_number['east'] = $this->now_number['east'];
        $new_number['west'] = $this->now_number['west'];
        $new_number['north'] = $this->now_number['bottom'];
        $new_number['south'] = $this->now_number['top'];
        $this->update($new_number);
    }

    public function right()
    {
        $new_number['top'] = $this->now_number['top'];
        $new_number['bottom'] = $this->now_number['bottom'];
        $new_number['east'] = $this->now_number['north'];
        $new_number['west'] = $this->now_number['south'];
        $new_number['north'] = $this->now_number['west'];
        $new_number['south'] = $this->now_number['east'];
        $this->update($new_number);
    }

    public function left()
    {
        $new_number['top'] = $this->now_number['top'];
        $new_number['bottom'] = $this->now_number['bottom'];
        $new_number['east'] = $this->now_number['south'];
        $new_number['west'] = $this->now_number['north'];
        $new_number['north'] = $this->now_number['east'];
        $new_number['south'] = $this->now_number['west'];
        $this->update($new_number);
    }

    public function get_top_number()
    {
        return 2;
    }

    public function update($new_number)
    {
        $this->now_number['top'] = $new_number['top'];
        $this->now_number['bottom'] = $new_number['bottom'];
        $this->now_number['east'] = $new_number['east'];
        $this->now_number['west'] = $new_number['west'];
        $this->now_number['north'] = $new_number['north'];
        $this->now_number['south'] = $new_number['south'];
    }
}
