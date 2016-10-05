<?php

require_once('File.php');
require_once('Game.php');

$contents = (new File($argv[1]))->read();
$result = (new Game($contents))->start();
echo $result;
