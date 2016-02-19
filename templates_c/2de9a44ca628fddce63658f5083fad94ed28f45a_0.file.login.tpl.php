<?php
/* Smarty version 3.1.28-dev/77, created on 2015-12-07 13:07:55
  from "C:\OpenServer\domains\Library4\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_56655a7b824b54_87406339',
  'file_dependency' => 
  array (
    '2de9a44ca628fddce63658f5083fad94ed28f45a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library4\\templates\\login.tpl',
      1 => 1449318641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56655a7b824b54_87406339 ($_smarty_tpl) {
?>
<div>
    <form action="/Login" method="POST">
        <input type="hidden" name="uri" value="<?php echo $_SERVER['REQUEST_URI'];?>
"/>
        <?php if ($_SESSION['user']) {?>
            Привет, <?php echo $_SESSION['user']->name;?>
 <?php echo $_SESSION['user']->surname;?>

            <input type="submit" value="Sign out..."/>
            <a href="/Login/RegisterForm/login/<?php echo $_SESSION['user']->login;?>
">Update</a>
        <?php } else { ?>
            Login: <input type="text" name="login"/>
            Password: <input type="password" name="password"/>
            <input type="submit" value="Sign in!"/>
            <a href="/Login/RegisterForm">Register</a>
        <?php }?>
    </form>
</div>
<?php }
}
