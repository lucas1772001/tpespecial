<?php
/* Smarty version 3.1.39, created on 2021-10-22 22:04:14
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\logIn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6173193ed06b52_68427724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9650c8ab3b4cbd1aa321462ca99b3447a46ae85a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\logIn.tpl',
      1 => 1634172376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6173193ed06b52_68427724 (Smarty_Internal_Template $_smarty_tpl) {
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
