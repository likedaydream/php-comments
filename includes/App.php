<?php

class App
{
    protected static $registry = [];

    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception('Компонент не доступен');
        }

        return static::$registry[$key];
    }

    public static function set($key, $value)
    {
        static::$registry[$key] = $value;
    }
}
