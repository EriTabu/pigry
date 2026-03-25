<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>登録完了</title>

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
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.logo{
    color:#d291ff;
    font-size:32px;
    margin-bottom:10px;
}

.message{
    color:black;
    font-size:18px;
    margin:20px 0;
}

button{
    margin-top:20px;
    width:100%;
    padding:12px;
    border:none;
    border-radius:8px;
    color:white;
    background: linear-gradient(90deg,#a18cd1,#fbc2eb);
    font-weight:bold;
}
</style>

</head>
<body>

<div class="card">
    <div class="logo">PiGLy</div>

    @if(session('success'))
        <div class="message">
            {{ session('success') }}
        </div>
    @else
        <div class="message">
            登録を完了しました。
        </div>
    @endif

    <form action="/weight" method="get">
        <button type="submit">体重管理画面へ</button>
    </form>

</div>

</body>
</html>