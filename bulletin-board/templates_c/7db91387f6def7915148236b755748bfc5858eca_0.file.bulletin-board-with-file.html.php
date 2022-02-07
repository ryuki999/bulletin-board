<?php
/* Smarty version 3.1.36, created on 2022-02-07 14:10:16
  from 'C:\xampp\htdocs\bulletin-board\bulletin-board\templates\bulletin-board-with-file.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_62011a38c73ab3_97509888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7db91387f6def7915148236b755748bfc5858eca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\bulletin-board\\bulletin-board\\templates\\bulletin-board-with-file.html',
      1 => 1644229987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62011a38c73ab3_97509888 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <title>掲示板</title>
</head>

<body>
  <header>
    <div class="header-left">
      <a class="logo" href="bulletin-board-with-file.php">簡易掲示板</a></span>
    </div>
    <div class="header-right">
      <form method="POST" action="bulletin-board-with-file.php">
        <input class="logout btn-square-little-rich" type="submit" value="Logout" name="logout" />
      </form>
    </div>
  </header>

  <div class="wrapper">
    <div class="form-list">
      <div class="form-item">
        <form method="POST" action="bulletin-board-with-file.php" enctype="multipart/form-data">
          <h2 class="none-diverted">投稿フォーム</h2>
          <label class="username"><?php echo $_smarty_tpl->tpl_vars['userName']->value;?>
</label>でログイン中</br>
          <input name="name" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['editName']->value;?>
" />
          <p>Comment:</p>
          <input name="comment" type="text" value="<?php echo $_smarty_tpl->tpl_vars['editComment']->value;?>
" /></br>
          <input type="hidden" name="textbox" value="<?php echo $_smarty_tpl->tpl_vars['editNumber']->value;?>
" />
          <p>Password:</p>
          <input type="text" name="sendPass" /><br>
          <p>File:</p>
          <input type="file" name="upFile" accept="image/*, video/*" />
          <input type="submit" value="Send" name="send" />
        </form>
      </div>
      <div class="form-item">
        <form method="POST" action="bulletin-board-with-file.php">
          <!--投稿削除用-->
          <h2>削除フォーム</h2>
          <p>deleteNumber:</p>
          <input type="text" name="deleteNumber" /><br>
          <p>Password:</p>
          <input type="text" name="deletePass" />
          <input type="submit" value="Delete" name="delete" />
        </form>
      </div>
      <div class="form-item">
        <form method="POST" action="bulletin-board-with-file.php">
          <h2>編集フォーム</h2>
          <!--投稿編集用-->
          <p>editNumber:</p>
          <input type="text" name="editNumber" /><br>
          <p>Password:</p>
          <input type="text" name="editPass" />
          <input type="submit" value="Edit" name="edit" />
        </form>
      </div>
      <div class="message">
        <p class="message"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
      </div>
    </div>

    <div class="post-list">
      <h1 class="none-diverted">投稿一覧</h1>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
      <div class="post-item">
        <div class="letter-item">
          <p>ID: <?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</p>
          <p>Name: <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</p>
          <p>Comment: <?php echo $_smarty_tpl->tpl_vars['row']->value['comment'];?>
</p>
          <p>Date: <?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</p>
          <p>Password: <?php echo $_smarty_tpl->tpl_vars['row']->value['pass'];?>
</p>
        </div>
        <div class="file-item">
          <?php if (!empty($_smarty_tpl->tpl_vars['row']->value['ext']) && $_smarty_tpl->tpl_vars['row']->value['ext'] === "video") {?>
          <video src='<?php echo $_smarty_tpl->tpl_vars['row']->value['file_path'];?>
' controls></video>
          <?php } elseif (!empty($_smarty_tpl->tpl_vars['row']->value['ext']) && $_smarty_tpl->tpl_vars['row']->value['ext'] === "img") {?>
          <img src='<?php echo $_smarty_tpl->tpl_vars['row']->value['file_path'];?>
' width='500' height='300' />
          <?php }?>
        </div>
        <hr>
      </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</body>

</html><?php }
}
