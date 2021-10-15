<?php

require_once 'controller.php';
require_once 'libs/smarty-3.1.39/libs/Smarty.class.php';

class viewPart{

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

    public function renderTableOfProducts($products){
        $this->header();
        $this->smarty->assign("products", $products);
        $this->smarty->display("../templates/tableProducts.tpl");
    }


    function renderListOfCategories($categories){
        $this->header();
        $this->smarty->assign('categories', $categories);
        $this->smarty->display("../templates/listCategories.tpl");
        $this->footer();
    }

    function renderAdminAll($products, $categories){
        $this->header();
        $this->smarty->assign("products", $products);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display("../templates/adminTable.tpl");
        $this->smarty->display("../templates/insert.tpl");
        $this->smarty->display("../templates/deleteProduct.tpl");
        $this->smarty->display("../templates/updateProduct.tpl");
        $this->smarty->display("../templates/addCategorie.tpl");
        $this->smarty->display("../templates/deleteCategorie.tpl");
        $this->smarty->display("../templates/listCategories.tpl");
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