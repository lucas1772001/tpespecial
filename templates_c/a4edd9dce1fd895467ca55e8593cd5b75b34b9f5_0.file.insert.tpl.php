<?php
/* Smarty version 3.1.39, created on 2021-10-14 19:03:02
  from 'C:\xampp\htdocs\tpe2\templates\insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616862c66571e7_13260286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4edd9dce1fd895467ca55e8593cd5b75b34b9f5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tpe2\\templates\\insert.tpl',
      1 => 1634230978,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616862c66571e7_13260286 (Smarty_Internal_Template $_smarty_tpl) {
?><h2 class="title">Ingrese un nuevo producto</h2>
    
    <form action="insertProduct" method="post">
        <input type="text" name="producto" placeholder="Producto">
        <select name="categoria" type="text";
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'categorie');
$_smarty_tpl->tpl_vars['categorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categorie']->value) {
$_smarty_tpl->tpl_vars['categorie']->do_else = false;
?>
            <option><?php echo $_smarty_tpl->tpl_vars['categorie']->value->categorias;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <input type="text" name="precio" placeholder="Precio">
        <input type="text" name="descripcion" placeholder="Detail">
        <button type="submit">enviar</button>
    </form>
    <br><?php }
}
