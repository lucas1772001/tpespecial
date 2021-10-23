<?php
/* Smarty version 3.1.39, created on 2021-10-22 22:04:16
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61731940a813f2_45046900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78dd69f24eddf523f9f5ac9b3fe772ce795dd64a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\register.tpl',
      1 => 1634172389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61731940a813f2_45046900 (Smarty_Internal_Template $_smarty_tpl) {
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
