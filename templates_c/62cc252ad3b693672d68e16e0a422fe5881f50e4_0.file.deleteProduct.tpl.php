<?php
/* Smarty version 3.1.39, created on 2021-10-14 07:17:11
  from 'C:\xampp\htdocs\tpe2\templates\deleteProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167bd571c2535_56069959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62cc252ad3b693672d68e16e0a422fe5881f50e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\deleteProduct.tpl',
      1 => 1634188554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6167bd571c2535_56069959 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Elimine un producto escogiendo su id</h2>
    <form action="delete" method="post">
        <select name="producto_id" id="">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['product']->value->producto_id;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit">Borrar</button>
    </form>
    <br><?php }
}
