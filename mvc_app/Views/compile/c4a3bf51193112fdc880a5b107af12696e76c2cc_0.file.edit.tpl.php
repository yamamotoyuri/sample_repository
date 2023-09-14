<?php
/* Smarty version 4.3.2, created on 2023-09-14 17:54:55
  from 'C:\xampp\htdocs\mvc_app\Views\contact\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6502ca5fdc5e94_44452920',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c4a3bf51193112fdc880a5b107af12696e76c2cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc_app\\Views\\contact\\edit.tpl',
      1 => 1694681685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6502ca5fdc5e94_44452920 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\mvc_app\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ更新画面</title>
    <style>

       a{
            text-decoration: none !important;
            color: black !important;
        } 

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
            <h2 class="mb-4">更新画面</h2>
            <form action="/contact/update" method="post" class="bg-white p-3 rounded mb-5" id="contact_form"novalidate>

                <div class="form-group">
                    <label for="name">氏名</label>
                    <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['result']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="name">
                    <p class="error-text name" id="name-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label for="furigana">ふりがな</label>
                    <input type="text" class="form-control" name="kana" placeholder="てすとたろう" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['result']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="kana">
                    <p class="error-text kana" id="kana-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['kana'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label for="tel">電話番号</label>
                    <input type="tel" class="form-control" name="tel" placeholder="" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['result']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="tel">
                    <p class="error-text tel" id="tel-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['tel'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" class="form-control"  name="email" placeholder="exemple@cin-group.co.jp" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['result']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" id="email">
                    <p class="error-text email" id="email-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                <div class="form-group">
                    <label for="text">お問い合わせ内容</label>
                    <textarea class="form-control" name="body" cols="30" rows="10" id="body"><?php echo smarty_modifier_replace((($tmp = $_smarty_tpl->tpl_vars['result']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),"<br />","\n");?>
</textarea>
                    <p class="error-text body" id="body-error"><?php echo (($tmp = $_smarty_tpl->tpl_vars['errorMessages']->value['body'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
</p>
                </div>
                
                <p>上記の内容でよろしいでしょうか？</p>

                <div class="edit-button">
                    <a href="/contact/index" class="btn bg-warning my-2 " >キャンセル</a>                    
                    <input type="submit" class="btn bg-warning my-2" name="send" value="更新"/>
                </div>    
            </form>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="../js/contactform.js"><?php echo '</script'; ?>
>
</body>

<?php }
}
