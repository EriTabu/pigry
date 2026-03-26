<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>会員登録</title>
<style>
body{
    margin:0;
    height:100vh;
    background: linear-gradient(135deg,#fbc2eb,#a6c1ee);
    display:flex;
    justify-content:center;
    align-items:center;
    font-family:sans-serif;
}

.card{
background:white;
width:400px;
padding:40px;
border-radius:12px;
box-shadow:0 10px 30px rgba(0,0,0,0.1);
}

.logo{
text-align:center;
font-size:28px;
color:#d88fd8;
margin-bottom:10px;
}

.subtitle{
text-align:center;
margin-bottom:30px;
}

input{
width:100%;
padding:12px;
margin-bottom:5px;
border:1px solid #ddd;
border-radius:6px;
}

.error{
color:red;
font-size:12px;
margin-bottom:10px;
}

button{
width:100%;
padding:12px;
border:none;
border-radius:6px;
background:linear-gradient(90deg,#a18cd1,#fbc2eb);
color:white;
font-weight:bold;
margin-top:10px;
}

.link{
text-align:center;
margin-top:15px;
}

.link a{
color:#7c5cc4;
text-decoration:none;
font-size:14px;
}
</style>

</head>

<body>

<div class="card">
<div class="logo">PiGLy</div>
<div class="subtitle">新規会員登録</div>

<form method="POST" action="/register">
    @csrf

    <input type="text" name="name" placeholder="お名前" value="{{ old('name') }}">
    @error('name')
        <div class="error">{{ $message }}</div>
    @enderror

    <input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
    @error('email')
        <div class="error">{{ $message }}</div>
    @enderror

    <input type="password" name="password" placeholder="パスワード">
    @error('password')
        <div class="error">{{ $message }}</div>
    @enderror

    <button type="submit">次に進む</button>

</form>

<div class="link">
    すでに登録済みの方は  
    <a href="/login">ログインはこちら</a>
</div>

<div class="link">
    <a href="/contact">お問い合わせはこちら</a>
</div>

</div>

</body>
</html>