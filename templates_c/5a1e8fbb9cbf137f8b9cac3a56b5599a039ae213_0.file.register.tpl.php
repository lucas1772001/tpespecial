<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:46:31
  from 'C:\xampp\htdocs\tpe2\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61677de755ca72_85798477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a1e8fbb9cbf137f8b9cac3a56b5599a039ae213' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\register.tpl',
      1 => 1634172389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61677de755ca72_85798477 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login">
    <h2>Register</h2>

<form action="register" method="post">
    <div class="form-email">
    <input type="email" name="email" placeholder="E-mail">
    </div>
    <div class="form-pw">
    <input type="password" name="password" placeholder="Contraseña">
    </div>
    <input class="btn" type="submit" value="Register">
</form>
</div>
<?php }
}
