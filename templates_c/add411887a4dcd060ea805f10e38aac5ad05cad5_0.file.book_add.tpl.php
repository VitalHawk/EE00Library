<?php
/* Smarty version 3.1.28-dev/77, created on 2016-01-10 13:40:41
  from "C:\OpenServer\domains\Library4\templates\book_add.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56923529ca81f9_60890122',
  'file_dependency' => 
  array (
    'add411887a4dcd060ea805f10e38aac5ad05cad5' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library4\\templates\\book_add.tpl',
      1 => 1449318641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56923529ca81f9_60890122 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:/OpenServer/domains/Library4/smarty/libs/plugins\\function.html_options.php';
?>
<form action="/Book/Insert" method="POST" >
    <?php echo smarty_function_html_options(array('name'=>"catId",'options'=>$_smarty_tpl->tpl_vars['cats']->value,'selected'=>$_smarty_tpl->tpl_vars['catId']->value),$_smarty_tpl);?>

    <?php echo smarty_function_html_options(array('name'=>"pubId",'options'=>$_smarty_tpl->tpl_vars['pubs']->value,'selected'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl);?>

    <input type="text" name="name" value="" />
    <input type="text" name="surname" value="" />
    <input type="submit" value="Добавить" />
</form><?php }
}
