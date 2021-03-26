<?php
namespace App\Models;

class User {


    public function login($email, $senha) {

        $sql = "SELECT * FROM users WHERE email = ? AND senha = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            echo "Logado com sucesso";
        }else {
            echo "nao ha usuarios";
        }

    }
}