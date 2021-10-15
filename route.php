<?php

require_once './PRODUCTOS/controller.php';
require_once './USUARIOS/userController.php';

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'home';
}

$controller = new controllerPart;
$userController = new usersController;

$params = explode('/', $action);

switch ($params[0]) {
    case 'getAllProducts':
        $controller -> getAllProducts();
        break;
    case 'home':
            $controller -> callHome();
        break;
    case 'insertProduct':
        $controller -> askForInsert();
        break;
    case 'insertCategory':
        $controller -> askForInsertCategory();
        break;
    case 'deleteCategory':
        $controller -> askForDeleteCategory();
        break;
    case 'getAllCategories':
        $controller -> getAllCategories();
        break;
    case 'ProductByCategorie':
        $controller -> ProductByCategorie();
        break;
    case 'delete':
        $controller -> askForDelete();
        break; 
    case 'login':
        $userController -> askForLogin();
        break;
    case 'admin':
        $userController ->checkedLogin();
        break;
    case 'logout':
        $userController -> logOut();
        break;   
    case 'confirmUpdate':
        $controller -> confirmUpdate();
        break; 
    case 'register':
        $userController -> askForRegister();
        break;
    case 'user':
        $userController -> renderLogin();
        break;
    case 'newUser':
        $userController -> renderRegister();
        break;
    case 'contact':
        $controller -> contact();
        break;

    default:
        # code...
        break;
}