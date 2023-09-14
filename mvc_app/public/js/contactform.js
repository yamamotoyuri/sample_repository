const formElements = document.getElementById('contact_form'); 

formElements.addEventListener('submit', (event)=>{
    event.preventDefault();
    console.log(123)

    const name = formElements.name.value;
    const kana = formElements.kana.value;
    const tel = formElements.tel.value;
    const email = formElements.email.value;
    const body = formElements.body.value;

    const name_error_text = document.getElementsByClassName('error-text name')[0];
    const kana_error_text = document.getElementsByClassName('error-text kana')[0];
    const tel_error_text = document.getElementsByClassName('error-text tel')[0];
    const email_error_text =document.getElementsByClassName('error-text email')[0];
    const body_error_text = document.getElementsByClassName('error-text body')[0];


    if (name.length == 0) {
        name_error_text.textContent = '氏名を入力してください';
        formElements.name.classList.add("red-border");
        
    } else if (name.length > 10) {
        name_error_text.textContent = '氏名は10文字以内で入力してください';
        formElements.name.classList.add("red-border");

    } else {
        name_error_text.textContent = '';
    }


    // フリガナのバリデーション
    if (kana.length == 0) {
        kana_error_text.innerText = 'フリガナを入力してください';
        formElements.kana.classList.add("red-border");

    } else if (kana.length > 10) {
        kana_error_text.innerText = 'フリガナは10文字以内で入力してください';
        formElements.kana.classList.add("red-border");

    } else {
        kana_error_text.innerText = '';
    }

    // 電話番号のバリデーション
    if (tel.match(/[^0-9]+/)) {
        tel_error_text.innerText = '電話番号を正しく入力してください';
        formElements.tel.classList.add("red-border");

    } else {
        tel_error_text.innerText = '';
    }

    // メールアドレスのバリデーション
    if (email.length == 0) {
        email_error_text.innerText = 'メールアドレスを入力してください';
        formElements.email.classList.add("red-border");

    } else if (!email.match(/.+@.+/)) {
        email_error_text.innerText = 'メールアドレスを正しく入力してください';
        formElements.email.classList.add("red-border");

    } else {
        email_error_text.innerText = '';
    }

    // お問い合わせ内容のバリデーション
    if (body.length == 0) {
        body_error_text.innerText = 'お問い合わせ内容を入力してください';
        formElements.body.classList.add("red-border");

    } else {
        body_error_text.innerText = '';
    }


    if(name_error_text.innerText==''&&
        kana_error_text.innerText==''&&
        tel_error_text.innerText==''&&
        email_error_text.innerText==''&&
        body_error_text.innerText=='')
    {
        formElements.submit();
    }


});








