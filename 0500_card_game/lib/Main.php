<?php

require_once('File.php');

$contents = (new File('data/input.txt'))->read();
echo (new Game())->start();
