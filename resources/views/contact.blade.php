<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ</title>

<style>
body{
    margin:0;
    height:100vh;
    background:#f5f5f5;
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:sans-serif;
}

.card{
    background:white;
    width:700px;
    padding:40px;
    border-radius:8px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.title{
    text-align:center;
    font-size:24px;
    margin-bottom:30px;
    color:#8c7b6b;
}

.row{
    display:flex;
    margin-bottom:15px;
}

.label{
    width:180px;
    padding-top:10px;
    font-weight:bold;
    color:#8c7b6b;
}

.input-area{
    flex:1;
}

input,select,textarea{
    width:100%;
    padding:10px;
    border:1px solid #ddd;
    border-radius:4px;
}

textarea{
    height:100px;
}

.button-area{
    text-align:center;
    margin-top:25px;
}

button{
    background:#d84c3e;
    color:white;
    border:none;
    padding:12px 40px;
    border-radius:4px;
}
</style>

</head>

<body>

<div class="card">

<div class="title">お問い合わせ</div>

<form method="POST" action="/contact/confirm">
@csrf

<div class="row">
<div class="label">お名前</div>
<div class="input-area">
<input type="text" name="name">
</div>
</div>

<div class="row">
<div class="label">性別</div>
<div class="input-area">
<select name="gender">
<option value="男性">男性</option>
<option value="女性">女性</option>
</select>
</div>
</div>

<div class="row">
<div class="label">メールアドレス</div>
<div class="input-area">
<input type="email" name="email">
</div>
</div>

<div class="row">
<div class="label">電話番号</div>
<div class="input-area">
<input type="text" name="tel">
</div>
</div>

<div class="row">
<div class="label">住所</div>
<div class="input-area">
<input type="text" name="address">
</div>
</div>

<div class="row">
<div class="label">建物名</div>
<div class="input-area">
<input type="text" name="building">
</div>
</div>

<div class="row">
<div class="label">お問い合わせ種別</div>
<div class="input-area">
<select name="type">
<option value="商品について">商品について</option>
<option value="交換について">交換について</option>
<option value="その他">その他</option>
</select>
</div>
</div>

<div class="row">
<div class="label">お問い合わせ内容</div>
<div class="input-area">
<textarea name="content"></textarea>
</div>
</div>

<div class="button-area">
<button type="submit">確認画面</button>
</div>

</form>

</div>

</body>
</html>
