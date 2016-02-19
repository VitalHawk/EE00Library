<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-16 12:22:35
  from "C:\OpenServer\domains\Library4\templates\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56712d5b3c9b29_29132031',
  'file_dependency' => 
  array (
    '826be30228fdd46cdb7be403568ab326e71fab39' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library4\\templates\\layout.tpl',
      1 => 1450257748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_56712d5b3c9b29_29132031 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
    </head>
    <body>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1>Мой супер сайт!!!</h1>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['content_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

    </body>
</html>
<?php }
}
