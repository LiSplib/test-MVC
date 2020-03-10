<?php 

class DataBaseConnect
{
    protected function dbConnect()
    {
        $pdo = new PDO('mysql:dbname=;host=;charset=utf8', '', '');
        $pdo->setAttribute(PDO::ATTR_ERMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}