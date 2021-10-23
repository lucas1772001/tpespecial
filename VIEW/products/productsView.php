<?php

require_once './CONTROLLER/products/productsController.php';
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class productsView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function header(){
        $this->smarty->display("../templates/header.tpl");
    }

    function publicAccess() {
        $this->header();
        $this->smarty->display("../templates/home.tpl");
        $this->footer();
    }  

    function footer(){
        $this->smarty->display("../templates/footer.tpl");
    }

    public function renderTableOfProducts($products, $categories, $users){
        $this->header();
        $this->smarty->assign("products", $products);
        $this->smarty->assign("categories", $categories);
        $this->smarty->assign("users", $users);
        $this->smarty->display("../templates/tableProducts.tpl");
    }

    function renderListOfCategories($categories){
        $this->header();
        $this->smarty->assign('categories', $categories);
        $this->smarty->display("../templates/listCategories.tpl");
        $this->footer();
    }

    function renderByCategorie($products, $category){
        $this->header();
        $this->smarty->assign('titulo', $category);
        $this->smarty->assign('products', $products);
        $this->smarty->display("../templates/selectCategorie.tpl");
    }

    function renderContact(){
        $this->header();
        $this->smarty->display("../templates/contact.tpl");
        $this->footer();
    }
}