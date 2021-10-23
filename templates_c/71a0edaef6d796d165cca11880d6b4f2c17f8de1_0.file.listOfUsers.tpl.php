<?php
/* Smarty version 3.1.39, created on 2021-10-23 21:16:21
  from 'C:\xampp\htdocs\Tpe_LucasAmendola_BenjaminMontero\templates\listOfUsers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61745f85104fa7_74625610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71a0edaef6d796d165cca11880d6b4f2c17f8de1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tpe_LucasAmendola_BenjaminMontero\\templates\\listOfUsers.tpl',
      1 => 1635016579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61745f85104fa7_74625610 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tableProducts">
<h2 class="title">Users</h2>

    <table border=2>
        <thead>
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>Rol</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->password;?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['user']->value->rol == 'admin') {?>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->rol;?>
</td>
                <td><a href="adminOff/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><button class="btnD">Quitar permisos</button></a></td>
                <?php } else { ?>
                <td>No rol</td>
                <td><a href="adminOn/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><button class="btnD">Asignar permisos</button></a></td>
                <?php }?>
                <td><a href="deleteUser/<?php echo $_smarty_tpl->tpl_vars['user']->value->user_id;?>
"><button class="btnD">Borrar</button></a></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>
    <br><?php }
}
