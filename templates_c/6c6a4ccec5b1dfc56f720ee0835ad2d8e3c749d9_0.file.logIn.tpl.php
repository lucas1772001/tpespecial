<?php
/* Smarty version 3.1.39, created on 2021-10-14 02:46:18
  from 'C:\xampp\htdocs\tpe2\templates\logIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61677dda7545f9_03156551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c6a4ccec5b1dfc56f720ee0835ad2d8e3c749d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\logIn.tpl',
      1 => 1634172376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61677dda7545f9_03156551 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="login">
    <h2>Login</h2>

    <form action="login" method="post">
    <div class="form-email">
        <input type="email" name="email" placeholder="E-mail" required>
    </div>
    <div class="form-pw">
    <input type="password" name="password" placeholder="Contraseña" required>
    </div>
    <input class="btn" type="submit" value="Login">
</form>
</div>
<?php }
}
