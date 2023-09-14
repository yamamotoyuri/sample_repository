<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ確認画面</title>
    <style>
        a{
            text-decoration: none !important;
            color: black !important;
        } 

    </style>   
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
                    <p class="data-text">{$post['name']|default:''|escape} </p>
                </div>
                <div class="form-item">
                    <p class="label-text">ふりがな</p>
                    <p class="data-text">{$post['kana']|default:''|escape} </p>
                </div>
                <div class="form-item">
                    <p class="label-text">電話番号</p>
                    <p class="data-text">{$post['tel']|default:''|escape} </p>
                </div>
                <div class="form-item">
                    <p class="label-text">メールアドレス</p>
                    <p class="data-text">{$post['email']|default:''|escape} </p>
                </div>
                <div class="form-item">
                    <p class="label-text">お問い合わせ内容</p>
                    <p class="data-text">{$post['body']|default:''|escape|nl2br}</p>                   
                </div>

                <p>上記の内容でよろしいでしょうか？</p>

                <div class="edit-button">
                    <a href="/contact/index" class="btn bg-warning my-2 " >キャンセル</a>                    
                    <input type="submit" class="btn bg-warning my-2" name="send" value="送信"/>
                </div>    
            </form>
        </div>
    </div>
</div>
</body>
</html>


    









