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
    protected $pdo = null;


    public function __construct($config)
    {
        if(is_null($this->pdo)) {
            try {
                $this->pdo = new \PDO(
                    "{$config['adapter']}:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                    $config['user'],
                    $config['pass']
                );
            } catch (\PDOException $e) {
                die('Подключение не удалось: ' . $e->getMessage());
            }

        }
    }
}