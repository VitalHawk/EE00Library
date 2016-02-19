<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-07 13:07:59
  from "C:\OpenServer\domains\Library4\templates\user_register.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56655a7f3d0293_29594615',
  'file_dependency' => 
  array (
    'c775741438f8c1cef86e1c0c07d9901de4a83f32' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library4\\templates\\user_register.tpl',
      1 => 1449318641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56655a7f3d0293_29594615 ($_smarty_tpl) {
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
</form><?php }
}
