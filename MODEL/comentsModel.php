<?php

class comentsModel{
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 
                                'root', '');
    }
    function getAllComents(){
        $consult = $this-> db-> prepare ('SELECT * FROM comentarios');
        $consult->execute();
        $response = $consult-> fetchAll(PDO::FETCH_OBJ);
        return $response;
    }
    function getComent($comentId){
        $consult = $this-> db-> prepare ('SELECT * FROM comentarios WHERE id_comentario=?');
        $consult->execute($comentId);
        $response = $consult-> fetch(PDO::FETCH_OBJ);
        return $response;
    }
    function insertComent($comentario, $id_usuario, $id_producto){
        $consult = $this -> db -> prepare('INSERT into comentarios (comentario, id_user, id_producto) VALUES (?,?,?)');
        $consult->execute(array($comentario, $id_usuario, $id_producto));
        return $this->db->lastInsertId();
    }
}