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

input{
width:100%;
padding:12px;
margin-top:15px;
border:1px solid #ddd;
border-radius:8px;
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
<h2>PiGLy</h2>

@if(session('error'))
<p style="color:red">{{ session('error') }}</p>
@endif

<form method="POST" action="/login">
@csrf

<input type="email" name="email" placeholder="メールアドレス">
<input type="password" name="password" placeholder="パスワード">

<button type="submit">ログイン</button>

</form>

</div>

</body>
</html>