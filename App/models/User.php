<?php
namespace App\Models;

class User {

    public $retorno;

    public function login($user, $pass) {

        $sql = "SELECT * FROM users WHERE user = ? AND pass = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $user);
        $stmt->bindValue(2, $pass);
        $stmt->execute();

        if($stmt->rowCount() > 0) {

            $this->retorno =  $stmt->rowCount();
             
        }else {
            echo "nao ha usuarios";
        }

    }
}