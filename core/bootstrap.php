<?php

require "core/Router.php";
require "core/database/QueryBuilder.php";
require "core/database/Connection.php";

$config = require 'config.php';

return new QueryBuilder(
    Connection::make($config),
);