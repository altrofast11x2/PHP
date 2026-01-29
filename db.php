<?php
session_start();
class DB
{
    static $db = null;
    static function __callStatic($name, $args)
    {
        self::$db ??= new PDO(
            "mysql:host=localhost;dbname=board;charset=utf8mb4;",
            "root",
            "",
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
        return match ($name) {
            "exec" => self::$db->exec($args[0]),
            "fetch" => self::$db->query($args[0])->fetch(),
            "fetchAll" => self::$db->query($args[0])->fetchAll(),
        };
        throw new \Exception('Not implemented');
    }
}
