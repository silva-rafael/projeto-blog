<?php
namespace App\Models;


class Post {

    public $titulo;
    public $post;

    public function read() {
        $sql = "SELECT * FROM posts ORDER BY id_post DESC";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }

    public function postUnico($id_post) {

        $sql = "SELECT * FROM posts WHERE id_post = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id_post);
        $stmt->execute();

        if($stmt->rowCount() > 0) {
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            $this->titulo = $resultado['titulo'];
            $this->post = $resultado['post'];
        }

    }

    public function inserir($titulo = '', $post = ''){

        $sql = "INSERT INTO posts (titulo, post) VALUES (?,?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $post);
        $stmt->execute();

    }

    public function delete($id_post){


        $sql = "DELETE FROM posts WHERE id_post= ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id_post);
        $stmt->execute();
    }

    public function editar($titulo, $post, $id_post) {

        $sql = "UPDATE posts SET titulo = ? , post = ?  WHERE id_post = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $titulo);
        $stmt->bindValue(2, $post);
        $stmt->bindValue(3, $id_post);
        $stmt->execute();


    }
    
}