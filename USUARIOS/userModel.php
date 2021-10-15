<?php

class UsersModel{
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
    }
    function registerNewUser($user, $password){

        $consult = $this-> db -> prepare('INSERT INTO users_data(email, password) VALUES (?,?)');
        $consult -> execute(array($user, $password));
        $answer = $consult->fetchAll(pdo::FETCH_OBJ);
        return $answer;
    }
    function login($user){
        $consult = $this-> db -> prepare('SELECT * FROM users_data WHERE email = ?');
        $consult -> execute([$user]);
        $answer = $consult->fetch(pdo::FETCH_OBJ);
        return $answer;
    }

    function checkUSer(){
        $consult = $this-> db -> prepare('SELECT * FROM users_data');
        $consult -> execute();
        $users = $consult->fetchAll(pdo::FETCH_OBJ);
        return $users;
    }

}