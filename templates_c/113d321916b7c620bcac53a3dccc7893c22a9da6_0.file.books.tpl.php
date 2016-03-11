<?php
/* Smarty version 3.1.28-dev/77, created on 2016-02-28 23:15:20
  from "C:\OpenServer\domains\Library\templates\books.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56d355586c7e07_13590832',
  'file_dependency' => 
  array (
    '113d321916b7c620bcac53a3dccc7893c22a9da6' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library\\templates\\books.tpl',
      1 => 1456690517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d355586c7e07_13590832 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'C:/OpenServer/domains/Library/smarty/libs/plugins\\function.html_options.php';
?>
<div>
    <form method="get" action="/Book/Index">
        <?php echo smarty_function_html_options(array('name'=>"catId",'options'=>$_smarty_tpl->tpl_vars['cats']->value,'selected'=>$_smarty_tpl->tpl_vars['catId']->value),$_smarty_tpl);?>

        <?php echo smarty_function_html_options(array('name'=>"pubId",'options'=>$_smarty_tpl->tpl_vars['pubs']->value,'selected'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl);?>


        <input type="submit" class="btn btn-info btn-md" value="Refresh"></button>
    </form>

    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Date</th>
                <th>Category</th>
                <th>Publisher</th>
                <th>Authors</th>
            </tr>
        </thead>
        <?php
$_from = $_smarty_tpl->tpl_vars['books']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_b_0_saved_item = isset($_smarty_tpl->tpl_vars['b']) ? $_smarty_tpl->tpl_vars['b'] : false;
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable();
$__foreach_b_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_b_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$__foreach_b_0_saved_local_item = $_smarty_tpl->tpl_vars['b'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->date->format('d.m.Y');?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->category;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['b']->value->publisher;?>
</td>
                <td><?php
$_from = $_smarty_tpl->tpl_vars['b']->value->authors;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_a_1_saved_item = isset($_smarty_tpl->tpl_vars['a']) ? $_smarty_tpl->tpl_vars['a'] : false;
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable();
$__foreach_a_1_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_a_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$__foreach_a_1_saved_local_item = $_smarty_tpl->tpl_vars['a'];
echo $_smarty_tpl->tpl_vars['a']->value;?>
<br /><?php
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_1_saved_local_item;
}
}
if ($__foreach_a_1_saved_item) {
$_smarty_tpl->tpl_vars['a'] = $__foreach_a_1_saved_item;
}
?></td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_0_saved_local_item;
}
}
if ($__foreach_b_0_saved_item) {
$_smarty_tpl->tpl_vars['b'] = $__foreach_b_0_saved_item;
}
?>
    </table>
</div>
<?php }
}
