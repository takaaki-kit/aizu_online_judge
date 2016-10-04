<?php

class RuleTest extends PHPUnit_Framework_TestCase
{
    /** @tests */
    public function 変換ルール数を取得できること()
    {
        $rule = new Rule((new File('data/testinput.txt'))->read());
        $this->assertEquals('3' ,$rule->get_number_of_conversation());
    }
}
