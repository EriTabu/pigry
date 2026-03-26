<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログイン</title>

<style>
body{
margin:0;
height:100vh;
display:flex;
justify-content:center;
align-items:center;
background: linear-gradient(135deg,#fbc2eb,#a6c1ee);
font-family:sans-serif;
}

.card{
background:white;
padding:40px;
border-radius:12px;
width:400px;
text-align:center;
}

.logo{
font-size:28px;
color:#d88fd8;
margin-bottom:5px;
}

.subtitle{
margin-bottom:20px;
}

input{
width:100%;
padding:12px;
margin-top:10px;
border:1px solid #ddd;
border-radius:8px;
}

.error{
color:red;
font-size:12px;
text-align:left;
margin-top:5px;
}

button{
margin-top:20px;
width:100%;
padding:12px;
border:none;
border-radius:8px;
color:white;
background: linear-gradient(90deg,#a18cd1,#fbc2eb);
}
</style>

</head>
<body>

<div class="card">
<div class="logo">PiGLy</div>
<div class="subtitle">ログイン</div>

<form method="POST" action="/login">
@csrf

<input type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
@error('email')
<div class="error">{{ $message }}</div>
@enderror

<input type="password" name="password" placeholder="パスワード">
@error('password')
<div class="error">{{ $message }}</div>
@enderror

<button type="submit">ログイン</button>

</form>

</div>

</body>
</html>