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
                    <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="{$result['name']|default:''|escape}" id="name">
                    <p class="error-text name" id="name-error">{$errorMessages['name']|default:''}</p>
                </div>
                <div class="form-group">
                    <label for="furigana">ふりがな</label>
                    <input type="text" class="form-control" name="kana" placeholder="てすとたろう" value="{$result['kana']|default:''|escape}" id="kana">
                    <p class="error-text kana" id="kana-error">{$errorMessages['kana']|default:''}</p>
                </div>
                <div class="form-group">
                    <label for="tel">電話番号</label>
                    <input type="tel" class="form-control" name="tel" placeholder="" value="{$result['tel']|default:''|escape}" id="tel">
                    <p class="error-text tel" id="tel-error">{$errorMessages['tel']|default:''}</p>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" class="form-control"  name="email" placeholder="exemple@cin-group.co.jp" value="{$result['email']|default:''|escape}" id="email">
                    <p class="error-text email" id="email-error">{$errorMessages['email']|default:''}</p>
                </div>
                <div class="form-group">
                    <label for="text">お問い合わせ内容</label>
                    <textarea class="form-control" name="body" cols="30" rows="10" id="body">{$result['body']|default:''|replace:"<br />":"\n"}</textarea>
                    <p class="error-text body" id="body-error">{$errorMessages['body']|default:''}</p>
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
<script src="../js/contactform.js"></script>
</body>

