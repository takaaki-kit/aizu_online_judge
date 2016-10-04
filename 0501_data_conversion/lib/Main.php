<?php
require_once('Analysis.php');
require_once('File.php');
require_once('Rule.php');
require_once('Log.php');

$results =  (new Analysis())->run();
foreach($results as $result){
    echo "$result\n" ;
}

