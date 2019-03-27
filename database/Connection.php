<?php

class Connection {

    public static function make($config)
    {
        try {
            return new PDO($config['dsn'], $config['user'], $config['password'], $config['option']);
        } catch (PDOException $e) {
            dd('Connection failed: ' . $e->getMessage());
        }
    }

}

//Connection::make();  // static