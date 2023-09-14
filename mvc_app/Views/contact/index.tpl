
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
            <form action="/contact/conform" name="contactform"  method="post" class="bg-white p-3 rounded mb-5" id="contact_form">    
                <div class="form-group">
                    <label for="name">氏名</label>
                    <input type="text" class="form-control" name="name" placeholder="テスト太郎" value="{$post['name']|default:''|escape}">
                    <p class="error-text name" id="name-error">{$errorMessages['name']|default:''|escape}</p>
                </div>
                <div class="form-group">
                    <label for="furigana">ふりがな</label>
                    <input type="text" class="form-control" name="kana" placeholder="てすとたろう" value="{$post['kana']|default:''|escape}">
                    <p class="error-text kana" id="kana-error">{$errorMessages['kana']|default:''|escape}</p>
                </div>
                <div class="form-group">
                    <label for="tel">電話番号</label>
                    <input type="tel" class="form-control" name="tel" placeholder="" value="{$post['tel']|default:''|escape}">
                    <p class="error-text tel" id="tel-error">{$errorMessages['tel']|default:''|escape}</p>
                </div>
                <div class="form-group">
                    <label for="email">メールアドレス</label>
                    <input type="email" class="form-control" name="email" placeholder="exemple@cin-group.co.jp" value="{$post['email']|default:''|escape}">
                    <p class="error-text email" id="email-error">{$errorMessages['email']|default:''|escape}</p>
                </div>
                <div class="form-group">
                    <label for="text">お問い合わせ内容</label>
                    <textarea class="form-control" name="body" cols="30" rows="10">{$post['body']|default:''|escape}</textarea>
                    <p class="error-text body " id="body-error">{$errorMessages['body']|default:''}</p>
                </div>
                <input type="submit" class="btn bg-warning my-2"  name="send" value="送信"/>
                <input type="hidden" name="token" value="{bin2hex(openssl_random_pseudo_bytes(24))}"></input>
            </form>
         <table>
            {foreach $contact_list as $list}
                {if $list@first}
                <tr>
                    <th>氏名</th>
                    <th>フリガナ</th>
                    <th>電話番号</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせ内容</th>
                    <th></th>
                    <th></th>
                </tr>
                {/if}
                <tr>
                    <td>{$list->name|escape}</td>
                    <td>{$list->kana|escape}</td>
                    <td>{$list->tel|escape}</td>
                    <td>{$list->email|escape}</td>
                    <td>{$list->body|escape|replace:"\n":"<br />"}</td>
                    <td><a href="/contact/edit?id={$list->id}" class="button">編集</a></td>
                    <td><a href="/contact/delete?id={$list->id}" class="button" onclick="return confirm('本当に削除しますか??')">削除</a></td>
                </tr>
            {/foreach}
         </table>
        </div>
    </div>
 </div>
 <script src="../js/contactform.js"></script>
</body>
