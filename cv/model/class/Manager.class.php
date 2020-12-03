<?php

class Manager
{
    public function dbConnect()
    {
        $db = new PDO('mysql:host=localhost;dbname=cva;charset=utf8', 'root', '');
        return $db;
    }
   
}