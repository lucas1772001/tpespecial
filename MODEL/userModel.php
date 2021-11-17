<?php

class UsersModel{
    private $db;

    function __construct(){
        $this->db= new PDO('mysql:host=localhost;'.'dbname=tpe;charset=utf8', 'root', '');
    }
    function registerNewUser($user, $password){
        $consult = $this-> db -> prepare('INSERT INTO users_data(email, password) VALUES (?,?)');
        $consult -> execute(array($user, $password));
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
    function getAllUsers(){
        $consult = $this-> db -> prepare('SELECT * FROM users_data');
        $consult -> execute();
        $users = $consult->fetchAll(pdo::FETCH_OBJ);
        return $users;
    }
    function deleteUser($user){
        $consult = $this-> db-> prepare ('DELETE FROM users_data WHERE user_id = ?');
        $consult->execute([$user]);
    }
    function takePermition($rol, $param){
        $consult = $this-> db -> prepare('UPDATE users_data SET rol=? WHERE user_id='.$param.'');
        $consult->execute([$rol]);
    }
    function takeOffPermition($rol, $param){
        $consult = $this-> db -> prepare('UPDATE users_data SET rol=? WHERE user_id='.$param.'');
        $consult->execute([$rol]);
    }
}