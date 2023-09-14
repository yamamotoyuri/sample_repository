<?php
/* Smarty version 4.3.2, created on 2023-09-01 16:45:23
  from 'C:\xampp\htdocs\mvc_app\Views\user\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f19693823354_16995324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50c79ae2555a31037329b43114963e4c444116d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\user\\edit.tpl',
      1 => 1693331963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_64f19693823354_16995324 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Casteria</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="main">
        <div class="container-field">
            <?php $_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div class="form-wrapper">
                <h1>ユーザー情報編集</h1>
                <form action="/user/update" method="post">

                    <div class="form-item">
                        <label for="name">氏名</label>
                        <input type="text" name="name" placeholder="テスト太郎" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->name ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>

                    <div class="form-item">
                        <label for="kana">ふりがな</label>
                        <input type="text" name="kana" placeholder="てすとたろう" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->kana ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>

                    <div class="form-item">
                        <label for="email">メールアドレス</label>
                        <input type="email" name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['data']->value->email ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">
                        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>

                    <div class="form-item">
                        <label for="password">パスワード</label>
                        <input type="password" name="password" placeholder="password" value="">
                        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['password'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>

                    <div class="form-item">
                        <label for="password-confirmation">パスワード確認用</label>
                        <input type="password" name="password-confirmation" placeholder="password" value="">
                        <p class="error-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['password-confirmation'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                    </div>

                    <div class="edit-button">
                        <input type="submit" class="button" value="この内容で登録する">
                        <a href="#" class="button mt-4" onclick="return confirm('本当に退会しますか?')">退会する</a>
                    </div>
                </form>
            </div>
            <?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
    </div>
</body><?php }
}
