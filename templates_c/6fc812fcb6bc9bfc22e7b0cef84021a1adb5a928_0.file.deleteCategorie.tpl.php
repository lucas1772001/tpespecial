<?php
/* Smarty version 3.1.39, created on 2021-10-14 07:17:11
  from 'C:\xampp\htdocs\tpe2\templates\deleteCategorie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6167bd57336ef1_64132708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fc812fcb6bc9bfc22e7b0cef84021a1adb5a928' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\deleteCategorie.tpl',
      1 => 1634188545,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6167bd57336ef1_64132708 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Elimine una categoria</h2>
    <form action="deleteCategory" method="post">
        <select name="categorias">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['category']->value->categorias;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit">Borrar</button>
    </form>
    <br><?php }
}
