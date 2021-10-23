<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:03:47
  from 'C:\xampp\htdocs\tpe2\templates\updateProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616862f30f9e68_05869806',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7dd3a76fa5219e57609c9b08304ef7f6b60c144' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\updateProduct.tpl',
      1 => 1634231025,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616862f30f9e68_05869806 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Actualice el producto</h2>
    <form action="confirmUpdate" method="post">
        <input type="text" name="producto" placeholder="Producto">
            <select name="categoria">
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
            <select name="id">
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
        <input type="text" name="precio" placeholder="Precio">
        <input type="text" name="descripcion" placeholder="Detail">
        <button type="submit">Update</button>
    </form>
    <br><?php }
}
