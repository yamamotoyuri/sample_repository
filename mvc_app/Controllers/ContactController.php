<?php
require_once ROOT_PATH.'Controllers/Controller.php';
require_once ROOT_PATH.'Models/Contact.php';
class ContactController extends Controller
{

    

    public function index(){
        session_start();
        $error = $_SESSION['errorMessages'] ?? false;
        $post = $_SESSION['post'] ?? false;
        if ($error === false) {
            // エラーなし
            if ($post===false) {
                // ポストなし
                $Contact = new Contact;
                $contact_list = $Contact->index();
                $this->view('contact/index', ['contact_list' => $contact_list]);
            } else {
                // ポストあり
                $Contact = new Contact;
                $contact_list = $Contact->index();
                $this->view('contact/index', ['contact_list' => $contact_list,'post'=>$post]);
            }
        } else {
                // エラーあり
                $Contact = new Contact;
                $contact_list = $Contact->index();
                $this->view('contact/index',['contact_list' => $contact_list,'errorMessages'=>$error ,'post'=>$post]);  
        }
    }

    
    
    public function conform(){
        $errorMessages = [];

        $token = $_POST['token'] ?? false;
        if($token===false){
            session_start();
            $_SESSION['errorMessages']=[];
            $_SESSION['post']=$_POST;
            header('Location: /contact/index');

        }else {
            if(empty($_POST['name'])){
                 $errorMessages['name'] = '氏名を入力してください。';
            }
    
            if(mb_strlen($_POST['name']) > 10){
                $errorMessages['name'] = '氏名は10文字以内で入力してください。';
            }
    
            if(empty($_POST['kana'])){
                $errorMessages['kana'] = 'ふりがなを入力してください。';
            }
    
            if(mb_strlen($_POST['kana']) > 10){
                $errorMessages['kana'] = 'ふりがなは10文字以内で入力してください。';
            }
    
            if (!empty($_POST['tel'])) {
                // "tel" フィールドが空でない場合、電話番号が数字のみで構成されているか確認
                if (!preg_match("/^[0-9]+$/", $_POST['tel'])) {
                    // 電話番号が正しくない場合、エラーメッセージを設定します
                    $errorMessages['tel'] = '電話番号を正しく入力してください。';
                }
            }
    
            if(empty($_POST['email'])){
            //   メールアドレスが空であるかどうか検証する
                $errorMessages['email'] = 'メールアドレスを入力してください。';
            }else{

                if(!preg_match("/^[^@]+@[^@]+$/",($_POST['email']))){
                    $errorMessages['email'] = 'メールアドレスを正しく入力してください。';
                }
            }
            
            if(empty($_POST['body'])){
                $errorMessages['body'] = 'お問い合わせ内容を入力してください。';
            }

            if(!empty($errorMessages)){
                // バリデーション失敗
                session_start();
                $_SESSION['errorMessages']=$errorMessages;
                $_SESSION['post']=$_POST;
                header('Location: /contact/index');
            }else{
                session_start();
                $_SESSION['post']=$_POST;
                $this->view('contact/create', ['post' => $_POST]);   
            }
        }
    }

    public function create(){
        //登録処理
        $contact = new Contact;
        session_start();
        $result = $contact->createContact(
        $_SESSION['post']['name'],
        $_SESSION['post']['kana'],
        $_SESSION['post']['tel'],
        $_SESSION['post']['email'],
        $_SESSION['post']['body']           
        );
        $this->view('contact/send');
    }


    public function edit(){
        session_start();
        $id = $_GET['id'];
        $_SESSION['id'] =$id;  
        if($id){
            $instance = new Contact;
            $result = $instance->show($id);
            $this->view('contact/edit', ['result' => $result]);
        }
    }

    
    public function update(){
        $errorMessages = [];

        if(empty($_POST['name'])){
            $errorMessages['name'] = '氏名を入力してください。';
        }

        if(mb_strlen($_POST['name']) > 10){
            $errorMessages['name'] = '氏名は10文字以内で入力してください。';
        }

        if(empty($_POST['kana'])){
            $errorMessages['kana'] = 'ふりがなを入力してください。';
        }

        if(mb_strlen($_POST['kana']) > 10){
            $errorMessages['kana'] = 'ふりがなは10文字以内で入力してください。';
        }

        if (!empty($_POST['tel'])) {
            // "tel" フィールドが空でない場合、電話番号が数字のみで構成されているか確認
            if (!preg_match("/^[0-9]+$/", $_POST['tel'])) {
                // 電話番号が正しくない場合、エラーメッセージを設定します
                $errorMessages['tel'] = '電話番号を正しく入力してください。';
            }
        }

        if(empty($_POST['email'])){
        //   メールアドレスが空であるかどうか検証する
            $errorMessages['email'] = 'メールアドレスを入力してください。';
        }else{
            if(!preg_match("/^[^@]+@[^@]+$/",($_POST['email']))){
                $errorMessages['email'] = 'メールアドレスを正しく入力してください。';
             }
           
        }

        if(empty($_POST['body'])){
            $errorMessages['body'] = 'お問い合わせ内容を入力してください。';
        }


        session_start();

        if(!empty($errorMessages)){
            // バリデーション失敗
            $_SESSION['errorMessages']=$errorMessages;
            $_SESSION['post']=$_POST;
            $this->view('contact/edit',['errorMessages'=>$errorMessages ,'result'=>$_POST]); 
        }else{
            //登録処理
            $contact = new Contact;
            $result = $contact->updateContact(
                $_POST['name'],
                $_POST['kana'],
                $_POST['tel'],
                $_POST['email'],
                $_POST['body'],           
                $_SESSION['id']
           
            );
            header('Location: /contact/index');
        }
    }


    public function delete(){
        $id = $_GET['id'];
        if($id){
            $delete = new Contact;
            $result = $delete->deleteContactAccount($id);
            header('Location: /contact/index');
        } 
    }
}
