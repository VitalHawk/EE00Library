<?php
/* Smarty version 3.1.28-dev/77, created on 2016-02-14 14:35:55
  from "C:\OpenServer\domains\Library\templates\layout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56c0669bd39e43_70773065',
  'file_dependency' => 
  array (
    'e9027dfe16a4ed85a191921c4bd7163e11b4c44d' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library\\templates\\layout.tpl',
      1 => 1455449753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:login.tpl' => 1,
    'file:menu.tpl' => 1,
  ),
),false)) {
function content_56c0669bd39e43_70773065 ($_smarty_tpl) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
    </head>
    <body>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <h1>Мой супер сайт</h1>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['content_tpl']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <br>
        <?php echo $_smarty_tpl->tpl_vars['content_tpl']->value;?>

    </body>
</html>
<?php }
}
