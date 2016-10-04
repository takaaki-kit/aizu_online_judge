<?php

require('Rule.php');

class RuleTest extends PHPUnit_Framework_TestCase
{
    /** @tests */
    public function 変換ルールの数を取得できること()
    {
        $rule = new Rule((new File('data/testinput.txt'))->read());
        $this->assertEquals('3', $rule->get_number_of_conversations());
    }

    /** @tests */
    public function 変換ルールを取得できること()
    {
        $rule = new Rule((new File('data/testinput.txt'))->read());
        $this->assertEquals(array(
            'aho' => 'AHO',
            'boke' => 'BOKE',
            'kasu' => 'KASU',
        ), $rule->get_conversations());
    }
    /** @test */
    public function 分析を開始するデータの行数を取得すること()
    {
        $rule = new Rule((new File('data/testinput.txt'))->read());
        $this->assertEquals('5', $rule->get_start_line_of_analysis());
    }
}
