<?php

class Analysis
{
    public function run()
    {
        $file = new File('data/input.txt');
        $contents = $file->read();
        $rule = new Rule($contents);

        $log = new Log($contents, $rule->get_conversations(), $rule->get_start_line_of_analysis());
        return $log->output();
    }
}
