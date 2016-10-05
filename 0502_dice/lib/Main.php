<?php

require_once('Game.php');

$result = (new Game())->start();
echo($result);
