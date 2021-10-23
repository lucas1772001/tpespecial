<?php

require_once './CONTROLLER/products/productsController.php';
require_once './CONTROLLER/users/userController.php';
require_once './CONTROLLER/categories/categoriesController.php';

if(!empty($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = 'home';
}

$controller = new productsController;
$userController = new usersController;
$categoryController = new categoriesController;

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
        $categoryController -> askForInsertCategory();
        break;
    case 'deleteCategory':
        $categoryController -> askForDeleteCategory();
        break;
    case 'getAllCategories':
        $categoryController -> getAllCategories();
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
    case 'adminUsers':
        $userController -> checkedLoginForAdminUsers();
        break;
    case 'deleteUser':
        $userController -> askForDeleteUser($params[1]);
        break;
    case 'contact':
        $controller -> contact();
        break;
    case 'adminOn':
        $userController -> turnOnPermitions($params[1]);
        break;
    case 'adminOff':
        $userController -> turnOffPermitions($params[1]);
        break;

    default:
        # code...
        break;
}