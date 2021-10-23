<?php

require_once './VIEW/products/productsView.php';
require_once './MODEL/products/productsModel.php';
require_once './VIEW/users/userView.php';
require_once './MODEL/users/userModel.php';
require_once './CONTROLLER/users/userController.php';

class productsController{
    private $view;
    private $model;

    function __construct() {
        $this->view= new productsView;
        $this->model= new productsModel;
        $this->Userview= new UsersView;
        $this->Usermodel= new UsersModel;
        $this->userController= new usersController;
    }
    function callHome(){
        $this->view->publicAccess();
    }
    function getAllProducts(){
        $products = $this->model->getAllProductsList();
        $this->view->renderTableOfProducts($products, null, null);
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

    function ProductByCategorie(){

        if(isset($_POST['categoria'])){
            $category = $_POST['categoria'];

            $productos = $this->model->getProducByCategorie($category);
            $this->view->renderByCategorie($productos,$category);
        }
    }
    function askForDelete(){

        if(isset($_POST['producto_id'])){
            $productToDelete = $_POST['producto_id'];
            $this->model->deleteProductById($productToDelete);
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
