<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:24:33
  from 'C:\xampp\htdocs\tpe2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616867d138bd10_35166739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a839bf7732830cb4dafc516c27dea711372816e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\header.tpl',
      1 => 1634232246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616867d138bd10_35166739 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    </head>
                
    <body>

    <header>
        <li class="logo"><a href="home"><h2 class="title">NewComerce</h2></a></li>
            <nav>
                <ul class="nav__links">
                    <li><a href="getAllProducts">Products</a></li>
                    <li><a href="getAllCategories">Categories</a></li>
                    <li><a href="contact">About</a></li>
                </ul>
            </nav>
            <a class="cta" href="user">Log In</a>
            <a class="cta" href="newUser">Register</a>
            <a class="cta" href="logout" id="logout">LogOut</a>
            <p class="menu cta">Menu</p>
        </header>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="getAllProducts">Products</a>
                <a href="getAllCategories">Categories</a>
                <a href="contact">About</a>
            </div>
        </div>

    <div class="conteiner"><?php }
}
