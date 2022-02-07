<?php
/* Smarty version 3.1.36, created on 2022-02-07 13:46:40
  from 'C:\xampp\htdocs\bulletin-board\bulletin-board\templates\registration-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_620114b0cf00b3_80074089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bcb505aac9fac689765a9e4d83add1eb05b572c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bulletin-board\\bulletin-board\\templates\\registration-form.html',
      1 => 1644229987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_620114b0cf00b3_80074089 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/lo-rg.css" />
  <title>ログイン登録画面</title>
</head>

<div class="wrapper">
  <div class="signup-wrapper">
    <p class="form-title">登録フォーム</p>
    <form method="POST" action="registration-form.php">
      <p>Name:</p>
      <input type="text" name="name" value="" /><br />
      <p>Password:</p>
      <input type="text" name="pass" value="" /><br />
      <p>MailAddress:</p>
      <input type="email" name="mail" value="" />
      <input type="submit" value="SignUp" name="signup" />
    </form>
    <div class="message">
      <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
    </div>
    <hr>
    <a href="login-form.php">ログインはこちら</a>
  </div>

  <div class="user-list">
    <p>登録済みユーザ一覧</p>
    <p>id,name,pass,mail,flag</p>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
    <p><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
,<?php echo $_smarty_tpl->tpl_vars['row']->value['pass'];?>
,********,<?php echo $_smarty_tpl->tpl_vars['row']->value['flag'];?>
</p>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </div>
</div>

</body>

</html><?php }
}
