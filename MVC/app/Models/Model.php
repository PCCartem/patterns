<?php
/**
 * Created by PhpStorm.
 * User: pccartem
 * Date: 11.08.18
 * Time: 1:27
 */

namespace App\Models;


class Model
{
    protected static $pdo = null;

    public static function getConnect()
    {
        return self::$pdo;
    }

    public static function setConnect($config = [])
    {
        if(is_null(self::$pdo)) {
            try {
                self::$pdo = new \PDO(
                    "{$config['adapter']}:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                    $config['user'],
                    $config['pass']
                );
            } catch (\PDOException $e) {
                die('Подключение не удалось: ' . $e->getMessage());
            }

        } else {
            return self::$pdo;
        }
    }
}
