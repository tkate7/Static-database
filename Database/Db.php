<?php

    class Database {
        
        static public $database;
        
        static public function db ($database) {
            
            self::$database = $database;
            
        }
    }

$database = new mysqli("localhost", "root", "", "crud");
Database::db($database);