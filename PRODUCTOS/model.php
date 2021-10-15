<?php

class modelPart{

    private $db;

    function __construct(){
        $this-> db = new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
    }
    function getAllProductsList(){
        $consult = $this-> db-> prepare ('SELECT * FROM productos');
        $consult->execute();
        $response = $consult-> fetchAll(PDO::FETCH_OBJ);
        return $response;
    }
    function insertProduct($producto, $categoria, $precio, $descripcion){
        $consult = $this-> db-> prepare ('INSERT INTO productos (producto, categoria, precio, descripcion) VALUES (?,?,?,?)');
        $consult->execute(array($producto, $categoria, $precio, $descripcion));
    }

    function deleteAllCategory($categoryToDelete){
        $consult = $this-> db-> prepare ('DELETE FROM productos WHERE categoria = ?');
        $consult->execute([$categoryToDelete]);
    }

    function deleteCategory($categoryToDelete){
        $this->deleteAllCategory($categoryToDelete);
        $consult = $this-> db-> prepare ('DELETE FROM categorias WHERE categorias = ?');
        $consult->execute([$categoryToDelete]);
    }

    function insertCategory($category){
        $consult = $this-> db-> prepare ('INSERT INTO categorias (categorias) VALUES (?)');
        $consult->execute(array($category));
    }

    function getAllCategoriesList(){
        $consult = $this-> db-> prepare ('SELECT * FROM categorias');
        $consult->execute();
        $response = $consult-> fetchAll(PDO::FETCH_OBJ);
        return $response;
    }
    function getProducByCategorie($categorie){
        $consult = $this-> db-> prepare ('SELECT * FROM productos WHERE categoria = ?');
        $consult->execute([$categorie]);
        $response = $consult-> fetchAll(PDO::FETCH_OBJ);
        return $response;
    }
    function deleteProductById($productToDelete){
        $consult = $this-> db-> prepare ('DELETE FROM productos WHERE producto_id = ?');
        $consult->execute([$productToDelete]);
        $response = $consult-> fetchAll(PDO::FETCH_OBJ);
        return $response;
    }
    function updateProductById($producto, $categoria, $precio, $id, $descripcion){
        $consult = $this-> db-> prepare ('UPDATE productos SET producto=?,categoria=? ,precio=?, descripcion=? WHERE producto_id='.$id.'');
        $consult->execute([$producto, $categoria, $precio, $descripcion]);
        $response = $consult-> fetchAll(PDO::FETCH_OBJ);
        return $response;
    }
}