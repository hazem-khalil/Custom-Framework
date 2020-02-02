<?php

$database = require 'core/bootstrap.php';

$database->selectAll('task');


$router = new Router;

require 'routes.php';


$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);