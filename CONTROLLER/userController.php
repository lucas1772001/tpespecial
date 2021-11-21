<?php

require_once './VIEW/productsView.php';
require_once './MODEL/userModel.php';
require_once './VIEW/userView.php';
require_once './CONTROLLER/productsController.php';
require_once './MODEL/categoriesModel.php';

class usersController{
    private $Usermodel;
    private $Userview;
    private $model;
    private $view;
    private $categoryModel;

    function __construct(){
        $this->Userview = new UsersView;
        $this->Usermodel = new UsersModel;
        $this->view = new productsView;
        $this->model = new productsModel;
        $this->categoryModel = new categoriesModel;
    }

    function askForRegister(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $Newuser = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $users = $this->Usermodel->checkUSer();
            foreach($users as $user){}
                if($Newuser == $user->email){
                    $error = 3;
                    $this->Userview->renderFormRegister($error);
                }
                else{
                    $this->Usermodel->registerNewUser($Newuser, $password);
                    header('Location:home');
                }
             }
           }
    function askForLogin(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $user = $_POST['email'];
            $password = $_POST['password'];

            $userLogged = $this->Usermodel->login($user);
            
            if($userLogged && password_verify($password, $userLogged->password)){
                if($userLogged->rol == 'admin'){
                    session_start(); 
                    $_SESSION['email'] = $user;
                    $_SESSION['rol'] = $userLogged->rol;
                    header('Location:admin');
                }else{
                    session_start();   
                    $_SESSION['email'] = $user;
                    header('Location:home');
                }
            }
            else{
                $error = 1;
                $this->Userview->renderFormLogIn($error);
            }
        }
    }
    function confirmedAdminLog(){
            $products = $this->model->getAllProductsList();
            $categories = $this->categoryModel->getAllCategoriesList();
            $users = $this->Usermodel->getAllUsers();
            $this->view->renderTableOfProducts($products, $categories, $users);
        }
    function checkedLogin(){
        session_start();
        if(isset($_SESSION['rol'])=='admin'){
            $this->confirmedAdminLog();
        }else{
            $error = 2;
            $this->Userview->renderFormLogIn($error);
        }
    }
    function checkedLoginForAdminUsers(){
        session_start();
        if(isset($_SESSION['rol'])=='admin'){
            $this->askForAllUsers();
        }else{
            $error = 2;
            $this->Userview->renderFormLogIn($error);
        }
    }
    function logOut(){
        session_start();
        session_destroy();
        $this->Userview->renderLogOut();
    }
    function renderLogin(){
        $this->Userview->renderFormLogIn();
    }
    function renderRegister(){
        $this->Userview->renderFormRegister();
    }
    function askForAllUsers(){
        $users = $this->Usermodel->getAllUsers();
        $this->Userview->renderListOfUsers($users);
    }
    function askForDeleteUser($param){
        $user = $param;
        $this->Usermodel->deleteUser($user);
        header('Location:/tpParte2/adminUsers');
    }
    function turnOnPermitions($param){
        if(!empty($param)){
            $rol = 'admin';
            $this->Usermodel->takePermition($rol, $param);
            header('Location:/tpParte2/adminUsers');
        }
    }
    function turnOffPermitions($param){
        if(!empty($param)){
            $rol = 'No-admin';
            $this->Usermodel->takeOffPermition($rol, $param);
            header('Location:/tpParte2/adminUsers');
        }
    }
}

