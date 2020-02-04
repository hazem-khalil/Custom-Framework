<?php

class App
{
    protected static $app = [];

    public static function bind($key, $value)
    {
        static::$app[$key] = $value;
    }

    public static function get($key)
    {
        return static::$app[$key];
    }
}