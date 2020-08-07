<?php

class Connection
{
    public static function make($config)
    {
        try {
            $pdo = new PDO("mysql:dbname={$config['name']};host={$config['host']}", $config['username'], $config['password'], $config['options']);
        } catch (Exception $e) {
            throw new Exception('База недоступна.');
        }

        return $pdo;
    }
}
