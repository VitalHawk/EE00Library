<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-07 13:07:55
  from "C:\OpenServer\domains\Library4\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56655a7b8e8086_69100247',
  'file_dependency' => 
  array (
    '9ff53b153152be095400e28f83c4c852bfc00d50' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library4\\templates\\menu.tpl',
      1 => 1449318641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56655a7b8e8086_69100247 ($_smarty_tpl) {
?>
<ul>
    <li><a href="/Book/Index" >Поиск книг</a></li>
    <?php if ($_SESSION['user']->isAdmin) {?>
    <li><a href="/Book/Add" >Добавление книг</a></li>
    <?php }?>
</ul><?php }
}
