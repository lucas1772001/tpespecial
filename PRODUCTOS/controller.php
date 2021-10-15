<?php

require_once 'view.php';
require_once 'model.php';
require_once './USUARIOS/userView.php';
require_once './USUARIOS/userModel.php';
require_once './USUARIOS/userController.php';

class controllerPart{
    private $view;
    private $model;

    function __construct() {
        $this->view= new viewPart;
        $this->model= new modelPart;
        $this->Userview= new UsersView;
        $this->Usermodel= new UsersModel;
        $this->userController= new usersController;
    }
    function callHome(){
        $this->view->publicAccess();
    }
    function getAllProducts(){
        $products = $this->model->getAllProductsList();
        $this->view->renderTableOfProducts($products);
    }

    function askForInsert(){
        if(isset($_POST['producto'], $_POST['categoria'], $_POST['precio'], $_POST['descripcion'])){
            $producto = $_POST['producto'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $descripcion = $_POST['descripcion'];

            $this->model->insertProduct($producto, $categoria, $precio, $descripcion);
            header('Location:admin');
        }
    }

    function getAllCategories(){
        $categories = $this->model->getAllCategoriesList();
        $this->view->renderListOfCategories($categories);
    }

    function ProductByCategorie(){
        /*   $this->userController->checkedLogin();*/
        if(isset($_POST['categoria'])){
            $category = $_POST['categoria'];

            $productos = $this->model->getProducByCategorie($category);
            $this->view->renderByCategorie($productos,$category);
        }
    }
    function askForDelete(){
        /*$this->userController->checkedLogin();*/
        if(isset($_POST['producto_id'])){
            $productToDelete = $_POST['producto_id'];
            $this->model->deleteProductById($productToDelete);
            header('Location:admin');
        }
    }

    function askForInsertCategory(){
        if(isset($_POST['categorias'])){
            $category = $_POST['categorias'];
            $this->model->insertCategory($category);
            header('Location:admin');
        }
    }

    function askForDeleteCategory(){
        if(isset($_POST['categorias'])){
            $categoryToDelete = $_POST['categorias'];
            $this->model->deleteCategory($categoryToDelete);
            header('Location:admin');
        }
    }

    function confirmUpdate(){
        if(isset($_POST['producto'], $_POST['categoria'], $_POST['precio'], $_POST['id'], $_POST['descripcion'])){
            $producto = $_POST['producto'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $id = $_POST['id'];
            $descripcion = $_POST['descripcion'];

            $this->model->updateProductById($producto, $categoria, $precio, $id, $descripcion);
            header('Location:admin');
        }
    }

    function contact(){
        $this->view->renderContact();
    }
}
