<?php
/* Smarty version 3.1.39, created on 2021-10-14 07:17:11
  from 'C:\xampp\htdocs\tpe2\templates\addCategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167bd572d8be8_85053828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e123001ea11428c4dd9501f944607824a991fd95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\addCategorie.tpl',
      1 => 1634188532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6167bd572d8be8_85053828 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Ingrese un nueva categoria</h2>
    <form action="insertCategory" method="post">
        <input type="text" name="categorias" placeholder="Nueva categoria">
        <input type="submit" value="Agregar">
    </form>
    <br><?php }
}
