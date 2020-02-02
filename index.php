<?php

$database = require 'core/bootstrap.php';

var_dump($database->selectAll('task'));

//$result = $database->selectAll('task');
// show results