<?php

return [
    'connection' => 'mysql:host=127.0.0.1',
    'dbname' => 'MyTodo',
    'username' => 'root',
    'password' => '',
    'options' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ],
];