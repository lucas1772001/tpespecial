<?php
/* Smarty version 3.1.39, created on 2021-10-22 22:21:45
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\addCategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61731d5961a3b6_57190665',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd26fb6f5dcf3b8cae72e0fc2665ab92b8491c4ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\addCategorie.tpl',
      1 => 1634188532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61731d5961a3b6_57190665 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Ingrese un nueva categoria</h2>
    <form action="insertCategory" method="post">
        <input type="text" name="categorias" placeholder="Nueva categoria">
        <input type="submit" value="Agregar">
    </form>
    <br><?php }
}
