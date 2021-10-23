<?php
/* Smarty version 3.1.39, created on 2021-10-23 23:39:14
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_617481025eb516_82257152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214015a3dd486d0d1b6c454d9406eae9fd799c61' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\error.tpl',
      1 => 1635025141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_617481025eb516_82257152 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value == 1) {?>
    <h2 class="title">Usuario o Contraseña incorrectas</h2>
    <br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error']->value == 2) {?>
    <h2 class="title">Solo usuarios autorizados!</h2>
    <br>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['error']->value == 3) {?>
    <h2 class="title">Su usuario ya existe!</h2>
    <br>
<?php }
}
}
