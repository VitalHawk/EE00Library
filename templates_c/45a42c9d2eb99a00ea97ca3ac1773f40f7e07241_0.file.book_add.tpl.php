<?php
/* Smarty version 3.1.28-dev/77, created on 2016-01-10 13:50:20
  from "C:\OpenServer\domains\Library\templates\book_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5692376cb06280_46190332',
  'file_dependency' => 
  array (
    '45a42c9d2eb99a00ea97ca3ac1773f40f7e07241' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library\\templates\\book_add.tpl',
      1 => 1449318641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5692376cb06280_46190332 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:/OpenServer/domains/Library/smarty/libs/plugins\\function.html_options.php';
?>
<form action="/Book/Insert" method="POST" >
    <?php echo smarty_function_html_options(array('name'=>"catId",'options'=>$_smarty_tpl->tpl_vars['cats']->value,'selected'=>$_smarty_tpl->tpl_vars['catId']->value),$_smarty_tpl);?>

    <?php echo smarty_function_html_options(array('name'=>"pubId",'options'=>$_smarty_tpl->tpl_vars['pubs']->value,'selected'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl);?>

    <input type="text" name="name" value="" />
    <input type="text" name="surname" value="" />
    <input type="submit" value="Добавить" />
</form><?php }
}
