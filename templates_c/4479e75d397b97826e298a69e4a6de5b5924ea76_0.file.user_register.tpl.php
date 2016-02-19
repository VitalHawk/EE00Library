<?php
/* Smarty version 3.1.28-dev/77, created on 2016-01-24 21:15:29
  from "C:\OpenServer\domains\Library\templates\user_register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56a514c17c7cd1_41138818',
  'file_dependency' => 
  array (
    '4479e75d397b97826e298a69e4a6de5b5924ea76' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library\\templates\\user_register.tpl',
      1 => 1453659304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a514c17c7cd1_41138818 ($_smarty_tpl) {
?>
<form action="/Login/RegisterForm" method="POST">
    <label for="surname">Фамилия</label>
    <input type="text" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->surname;?>
" />
    <br>
    <label for="name">Имя</label>
    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
" />
    <br>
    <label for="login">Логин</label>
    <input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
" />
    <br>
    <label for="password">Пароль</label>
    <input type="password" name="password" />
    <br>
    <input type="submit" value="Сохранить" />
    <?php
$_from = $_smarty_tpl->tpl_vars['test']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_hash_0_saved_item = isset($_smarty_tpl->tpl_vars['hash']) ? $_smarty_tpl->tpl_vars['hash'] : false;
$_smarty_tpl->tpl_vars['hash'] = new Smarty_Variable();
$__foreach_hash_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_hash_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['hash']->value) {
$__foreach_hash_0_saved_local_item = $_smarty_tpl->tpl_vars['hash'];
?>
        <?php echo $_smarty_tpl->tpl_vars['hash']->value;?>

    <?php
$_smarty_tpl->tpl_vars['hash'] = $__foreach_hash_0_saved_local_item;
}
}
if ($__foreach_hash_0_saved_item) {
$_smarty_tpl->tpl_vars['hash'] = $__foreach_hash_0_saved_item;
}
?>
    
    
</form><?php }
}
