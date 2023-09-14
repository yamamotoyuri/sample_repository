<?php
/* Smarty version 4.3.2, created on 2023-09-13 01:10:22
  from 'C:\xampp\htdocs\mvc_app\Views\contact\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_65008d6e71a970_19491152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8578d1eecb0df0bc7e0625f36d9642e4e14ba4ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\index.tpl',
      1 => 1694535011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65008d6e71a970_19491152 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ入力画面</title>
    <style>
        table {
          border:1px solid #000;
          border-collapse: collapse;
        }

        
        th, td {
         border:1px solid #000;
        } 
        
    </style>

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="p-4 container-field form-orange">
    <div class="row justify-content-center">
        <div class="col-lg-6 mx-auto col-md-8">
            <h2 class="mb-4">入力画面</h2>
            <form action="/contact/conform" method="post" class="bg-white p-3 rounded mb-5" id="contact_form"novalidate>
                
                <div class="form-group">
                    <label for="name">氏名</label>
                    <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="<?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['post']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
" id="name">
                    <p class="error-text name" id="name-error"><?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
                <div class="form-group">
                    <label for="furigana">ふりがな</label>
                    <input type="text" class="form-control" name="kana" placeholder="てすとたろう" value="<?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['post']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
" id="kana">
                    <p class="error-text kana" id="kana-error"><?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
                <div class="form-group">
                    <label for="tel">電話番号</label>
                    <input type="tel" class="form-control" name="tel" placeholder="" value="<?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['post']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
" id="tel">
                    <p class="error-text tel" id="tel-error"><?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" class="form-control"  name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['post']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
" id="email">
                    <p class="error-text email" id="email-error"><?php echo htmlspecialchars((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
                <div class="form-group">
                    <label for="text">お問い合わせ内容</label>
                    <textarea class="form-control" name="body" cols="30" rows="10" id="body"><?php echo htmlspecialchars((string) nl2br((string) htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['post']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true), (bool) 1), ENT_QUOTES, 'UTF-8');?>
</textarea>
                    <p class="error-text body " id="body-error"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</p>
                </div>
                <button class="btn bg-warning my-2">送信</button>
                <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) bin2hex(openssl_random_pseudo_bytes(24)), ENT_QUOTES, 'UTF-8');?>
"></input>
            </form>
            

                <table>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contact_list']->value, 'list');
$_smarty_tpl->tpl_vars['list']->index = -1;
$_smarty_tpl->tpl_vars['list']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->do_else = false;
$_smarty_tpl->tpl_vars['list']->index++;
$_smarty_tpl->tpl_vars['list']->first = !$_smarty_tpl->tpl_vars['list']->index;
$__foreach_list_0_saved = $_smarty_tpl->tpl_vars['list'];
?>
                      <?php if ($_smarty_tpl->tpl_vars['list']->first) {?>
                        <tr>
                            <th>氏名</th>
                            <th>フリガナ</th>
                            <th>電話番号</th>
                            <th>メールアドレス</th>
                            <th>お問い合わせ内容</th>
                            <th></th>
                            <th></th>
                        </tr>
                      <?php }?>
                       <tr>
                            <td><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['list']->value->name, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['list']->value->kana, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['list']->value->tel, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['list']->value->email, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><?php echo htmlspecialchars((string) nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['list']->value->body, ENT_QUOTES, 'UTF-8', true), (bool) 1), ENT_QUOTES, 'UTF-8');?>
</td>
                            <td><a href="/contact/edit?id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="button">編集</a></td>
                            <td><a href="/contact/delete?id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['list']->value->id, ENT_QUOTES, 'UTF-8');?>
" class="button" onclick="return confirm('本当に削除しますか??')">削除</a></td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['list'] = $__foreach_list_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </table>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="js/contact.js"><?php echo '</script'; ?>
>
</body>
<?php }
}
