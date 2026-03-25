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
    background: linear-gradient(135deg,#fbc2eb,#a6c1ee);
    font-family: sans-serif;
}

.card{
    background:white;
    padding:40px;
    border-radius:12px;
    width:400px;
    text-align:center;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

h1{
    color:#c084fc;
    margin-bottom:10px;
}

.subtitle{
    margin-bottom:20px;
    color:#666;
}

.input-group{
    margin-bottom:15px;
    text-align:left;
}

input{
    width:100%;
    padding:10px;
    border-radius:6px;
    border:1px solid #ccc;
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
    <h1>PiGLy</h1>
    <div class="subtitle">STEP2 体重データの入力</div>

    <form method="POST" action="/weight">
        @csrf

        <div class="input-group">
            <label>現在の体重</label>
            <input type="text" name="weight"> kg
        </div>

        <div class="input-group">
            <label>目標の体重</label>
            <input type="text" name="target_weight"> kg
        </div>

        <button type="submit">アカウント作成</button>

    </form>
</div>

</body>
</html>