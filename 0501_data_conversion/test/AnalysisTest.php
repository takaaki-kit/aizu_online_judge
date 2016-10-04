<?php

require('Analysis.php');

class AnalysisTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function 変換結果を出力する()
    {
        $analysis = new Analysis();
        $this->assertEquals(['a', 'B', 'C', '5', '1', '4', '4', 'a', 'b', 'a' ], $analysis->run());
    }
}

