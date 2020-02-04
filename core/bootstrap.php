<?php


App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
        Connection::make(App::get('config')['database'])
    )
);

function view($file, $data = []) {
    extract($data);
    return require "views/{$file}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}