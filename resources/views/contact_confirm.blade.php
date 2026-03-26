<!DOCTYPE html>

<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせ確認</title>

<style>
body{
    margin:0;
    background:#f5f5f5;
    font-family:sans-serif;
}

.overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.3);
    display:flex;
    justify-content:center;
    align-items:center;
}

.modal{
    background:#fff;
    width:700px;
    padding:30px 40px;
    border-radius:8px;
    box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.title{
    text-align:center;
    font-size:24px;
    margin-bottom:25px;
    color:#8c7b6b;
}

.row{
    display:flex;
    border-bottom:1px solid #eee;
    padding:12px 0;
}

.label{
    width:200px;
    font-weight:bold;
    color:#8c7b6b;
}

.value{
    flex:1;
    color:#333;
}

.btn-area{
    text-align:center;
    margin-top:25px;
}

.send-btn{
    background:#d84c3e;
    color:#fff;
    border:none;
    padding:10px 30px;
    border-radius:4px;
    cursor:pointer;
    margin-right:10px;
}

.back-btn{
    background:#ccc;
    color:#333;
    border:none;
    padding:10px 30px;
    border-radius:4px;
    cursor:pointer;
}
</style>

</head>

<body>

<div class="overlay">
<div class="modal">

<div class="title">お問い合わせ確認</div>

<div class="row">
<div class="label">お名前</div>
<div class="value">{{ $name }}</div>
</div>

<div class="row">
<div class="label">性別</div>
<div class="value">{{ $gender }}</div>
</div>

<div class="row">
<div class="label">メールアドレス</div>
<div class="value">{{ $email }}</div>
</div>

<div class="row">
<div class="label">電話番号</div>
<div class="value">{{ $tel }}</div>
</div>

<div class="row">
<div class="label">住所</div>
<div class="value">{{ $address }}</div>
</div>

<div class="row">
<div class="label">建物名</div>
<div class="value">{{ $building }}</div>
</div>

<div class="row">
<div class="label">お問い合わせ種別</div>
<div class="value">{{ $type }}</div>
</div>

<div class="row">
<div class="label">お問い合わせ内容</div>
<div class="value">{{ $content }}</div>
</div>

<div class="btn-area">

<form method="POST" action="/contact/send" style="display:inline;">
@csrf
<input type="hidden" name="name" value="{{ $name }}">
<input type="hidden" name="gender" value="{{ $gender }}">
<input type="hidden" name="email" value="{{ $email }}">
<input type="hidden" name="tel" value="{{ $tel }}">
<input type="hidden" name="address" value="{{ $address }}">
<input type="hidden" name="building" value="{{ $building }}">
<input type="hidden" name="type" value="{{ $type }}">
<input type="hidden" name="content" value="{{ $content }}">
<button class="send-btn">送信</button>
</form>

<form method="GET" action="/contact" style="display:inline;">
<button class="back-btn">修正</button>
</form>

</div>

</div>
</div>

</body>
</html>
