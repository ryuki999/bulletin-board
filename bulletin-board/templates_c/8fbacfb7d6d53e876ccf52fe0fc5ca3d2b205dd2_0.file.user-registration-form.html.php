<?php
/* Smarty version 3.1.36, created on 2022-02-07 14:10:10
  from 'C:\xampp\htdocs\bulletin-board\bulletin-board\templates\user-registration-form.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62011a328f8ab5_22359653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fbacfb7d6d53e876ccf52fe0fc5ca3d2b205dd2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bulletin-board\\bulletin-board\\templates\\user-registration-form.html',
      1 => 1644229987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62011a328f8ab5_22359653 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/lo-rg.css" />
  <title>ユーザ登録確認画面</title>
</head>

<body>
  <div class="wrapper">
    <div class="signup-wrapper">
      <p>登録内容は以下で宜しいでしょうか?</p>
      <?php if ($_smarty_tpl->tpl_vars['displayName']->value != '') {?>
      <form action="user-registration-form.php" method="post">
        <p>メールアドレス：<?php echo $_smarty_tpl->tpl_vars['displayMail']->value;?>
</p>
        <p>ユーザ名：<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
</p>
        <p>パスワード：<?php echo $_smarty_tpl->tpl_vars['displayPass']->value;?>
</p>
        <input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['displayName']->value;?>
" />
        <input type="submit" name="registration" value="登録する" />
      </form>
      <?php } elseif ($_smarty_tpl->tpl_vars['postRegistration']->value != '') {?>

      <p>登録完了しました。</p>
      <a href="login-mail-registration-form.html">戻る</a>
      <?php }?>
    </div>
  </div>
</body>

</html><?php }
}
