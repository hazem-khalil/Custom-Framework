<?php

class Connection
{
    // to do connection => Connection::make($configuration)

    public static function make($config)
    {
        try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['dbname'],
                $config['username'],
                $config['password'],
                $config['options'],
            );
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}