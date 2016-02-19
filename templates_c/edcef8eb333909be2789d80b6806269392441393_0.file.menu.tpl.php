<?php
/* Smarty version 3.1.28-dev/77, created on 2016-01-10 13:42:09
  from "C:\OpenServer\domains\Library\templates\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56923581db9b46_09453502',
  'file_dependency' => 
  array (
    'edcef8eb333909be2789d80b6806269392441393' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library\\templates\\menu.tpl',
      1 => 1449318641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56923581db9b46_09453502 ($_smarty_tpl) {
?>
<ul>
    <li><a href="/Book/Index" >Поиск книг</a></li>
    <?php if ($_SESSION['user']->isAdmin) {?>
    <li><a href="/Book/Add" >Добавление книг</a></li>
    <?php }?>
</ul><?php }
}
