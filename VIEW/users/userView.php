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
            $this->smarty->assign('error', $error);
            $this->smarty->display("../templates/error.tpl");
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
        }else if($error == 1){
            $this->header();
            $this->smarty->assign('error', $error);
            $this->smarty->display("../templates/error.tpl");
            $this->smarty->display("../templates/logIn.tpl");
            $this->footer();
        }
        else if($error==2){
            $this->header();
            $this->smarty->assign('error', $error);
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
    function renderListOfUsers($users){
        $this->header();
        $this->smarty->assign('users', $users);
        $this->smarty->display("../templates/listOfUsers.tpl");
        $this->footer();
    }
}