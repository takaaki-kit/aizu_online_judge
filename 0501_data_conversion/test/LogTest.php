<?php

require('Log.php');

class LogTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function 変換結果を出力する()
    {
        $contents = (new File('data/testinput.txt'))->read();
        $rule = new Rule($contents);
        $log = new Log($contents, $rule->get_conversations(), $rule->get_start_line_of_analysis());
        $this->assertEquals(['AHO', 'Boke', 'kasU', 'BOKE', 'KASU'], $log->output());
    }

    /** @test */
    public function 変換結果を出力する2()
    {
        $contents = (new File('data/testinput2.txt'))->read();
        $rule = new Rule($contents);
        $log = new Log($contents, $rule->get_conversations(), $rule->get_start_line_of_analysis());
        $this->assertEquals(['AHO', 'bokE'], $log->output());
    }
}

