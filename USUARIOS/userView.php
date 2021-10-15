<?php

class UsersView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function header(){
        $this->smarty->display("../templates/header.tpl");
    }

    function footer(){
        $this->smarty->display("../templates/footer.tpl");
    }

    function renderFormRegister($error = null){
        if($error == 0){
            $this->header();          
            $this->smarty->display("../templates/register.tpl");
            $this->footer();
        }
        else{
            $this->header();
            $this->smarty->display("../templates/registerError.tpl");
            $this->smarty->display("../templates/register.tpl");
            $this->footer();
        }
    }

    function renderErrorlog(){
        $this->smarty->display("../templates/error.tpl");
    }

    function renderFormLogIn($error = null){
        if($error == 0){
            $this->header();
            $this->smarty->display("../templates/logIn.tpl");
            $this->footer();
        }else{
            $this->header();
            $this->smarty->display("../templates/error.tpl");
            $this->smarty->display("../templates/logIn.tpl");
            $this->footer();
        }
    }

    function renderLogOut(){
        $this->header();
        $this->smarty->display("../templates/logOut.tpl");
        $this->footer();
    }

}