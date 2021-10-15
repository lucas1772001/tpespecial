<?php

require_once './PRODUCTOS/view.php';
require_once 'userModel.php';
require_once 'userView.php';
require_once './PRODUCTOS/controller.php';

class usersController{
    private $Usermodel;
    private $Userview;
    private $model;
    private $view;

    function __construct(){
        $this->Userview = new UsersView;
        $this->Usermodel = new UsersModel;
        $this->view = new viewPart;
        $this->model = new modelPart;
    }

    function askForRegister(){
        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $Newuser = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $users = $this->Usermodel->checkUSer();
            foreach($users as $user){}
                if($Newuser != $user->email){
                    $this->Usermodel->registerNewUser($Newuser, $password);
                    header('Location:home');
                }
                else{
                    $error = 1;
                    $this->Userview->renderFormRegister($error);
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
            $categories = $this->model->getAllCategoriesList();
            $this->view->renderAdminAll($products, $categories);
        }


    function checkedLogin(){
        session_start();
        if(isset($_SESSION['rol'])){
            $this->confirmedAdminLog();
        }else{
            header('Location:user');
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
}
