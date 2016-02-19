<?php
/* Smarty version 3.1.28-dev/77, created on 2016-01-12 12:02:09
  from "C:\OpenServer\domains\Library\templates\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/77',
  'unifunc' => 'content_5694c111e25a39_87236608',
  'file_dependency' => 
  array (
    'b2a5bf9655c9d01674767610305736369a37ec83' => 
    array (
      0 => 'C:\\OpenServer\\domains\\Library\\templates\\login.tpl',
      1 => 1452589297,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5694c111e25a39_87236608 ($_smarty_tpl) {
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
