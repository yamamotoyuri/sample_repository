<?php
/* Smarty version 4.3.2, created on 2023-09-07 15:25:29
  from 'C:\xampp\htdocs\mvc_app\Views\contact\create.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64f96cd96bbbf4_76198498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d2b598622cb6deca7eaa46ce5a6eb75d60e41c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\create.tpl',
      1 => 1694067913,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64f96cd96bbbf4_76198498 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ確認画面</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="p-4 container-field form-orange">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto col-md-8">
            <h2 class="mb-4">確認画面</h2>
            <form action="/contact/create" method="post" class="bg-white p-3 rounded mb-5" novalidate>

                <div class="form-item">
                    <p class="label-text">氏名</p>
                    <p class="data-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 </p>
                </div>
                <div class="form-item">
                    <p class="label-text">ふりがな</p>
                    <p class="data-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 </p>
                </div>
                <div class="form-item">
                    <p class="label-text">電話番号</p>
                    <p class="data-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 </p>
                </div>
                <div class="form-item">
                    <p class="label-text">メールアドレス</p>
                    <p class="data-text"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
 </p>
                </div>
                <div class="form-item">
                    <p class="label-text">お問い合わせ内容</p>
                    <p class="data-text"><?php echo htmlspecialchars((string) nl2br((string) (($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), (bool) 1), ENT_QUOTES, 'UTF-8');?>
</p>
                </div>

                <p>上記の内容でよろしいでしょうか？</p>

                <div class="edit-button">
                    <input type="submit" class="btn bg-warning my-2" name="cancel" value="キャンセル" />
                    <input type="submit" class="btn bg-warning my-2" name="send" value="送信" />
                </div>    
            </form>
        </div>
    </div>
</div>
</body>
</html>


    









<?php }
}
