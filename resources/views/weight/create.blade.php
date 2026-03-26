<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>体重登録</title>

<style>
body{
    margin:0;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: linear-gradient(135deg,#c084fc,#93c5fd);
    font-family:sans-serif;
}

.card{
    background:white;
    padding:40px;
    width:420px;
    border-radius:16px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
}

.title{
    text-align:center;
    font-size:28px;
    color:#c084fc;
    margin-bottom:10px;
}

.subtitle{
    text-align:center;
    margin-bottom:30px;
}

.label{
    margin-top:15px;
    font-weight:bold;
}

input{
    width:100%;
    padding:12px;
    margin-top:5px;
    border-radius:8px;
    border:1px solid #ddd;
}

.unit{
    margin-bottom:10px;
}

.btn{
    width:100%;
    margin-top:25px;
    padding:12px;
    border:none;
    color:white;
    border-radius:8px;
    background:linear-gradient(90deg,#c084fc,#f472b6);
    font-weight:bold;
}
</style>

</head>
<body>

<div class="card">

<div class="title">PiGLy</div>
<div class="subtitle">体重データの入力</div>

<form method="POST" action="/weight">
@csrf

<div class="label">現在の体重</div>
<input type="text" name="weight">
<div class="unit">kg</div>

<div class="label">目標の体重</div>
<input type="text" name="target_weight">
<div class="unit">kg</div>

<button class="btn" type="submit">登録</button>

</form>

</div>

</body>
</html>