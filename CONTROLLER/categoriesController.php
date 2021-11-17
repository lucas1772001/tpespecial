<?php

require_once './MODEL/categoriesModel.php';
require_once './VIEW/productsView.php';

class categoriesController{

    private $model;
    private $view;

    function __construct(){
        $this->model= new categoriesModel;
        $this->view = new productsView; 
    }

    function getAllCategories(){
        $categories = $this->model->getAllCategoriesList();
        $this->view->renderListOfCategories($categories);
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
}