<?php
namespace App\Models;

class Model {

    private static $instance;

    public static function getConn() {

        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '123456');
        }

        return self::$instance;

    }


}
