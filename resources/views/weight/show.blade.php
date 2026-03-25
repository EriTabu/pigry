<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Weight Log</title>

<style>
body{
margin:0;
font-family:sans-serif;
background:#f5f5f5;
}

.container{
width:500px;
margin:80px auto;
background:white;
padding:30px;
border-radius:10px;
}

.form-group{
margin-bottom:15px;
}

label{
display:block;
margin-bottom:5px;
font-weight:bold;
}

.value{
padding:10px;
background:#f9f9f9;
border-radius:5px;
}

.buttons{
display:flex;
justify-content:space-between;
margin-top:20px;
}

.back{
background:#ddd;
padding:10px 20px;
border-radius:5px;
text-decoration:none;
color:black;
}

.edit{
background: linear-gradient(90deg,#a18cd1,#fbc2eb);
padding:10px 20px;
border-radius:5px;
text-decoration:none;
color:white;
}
</style>

</head>
<body>

<div class="container">

<h2>Weight Log</h2>

<div class="form-group">
<label>日付</label>
<div class="value">{{ $weight->created_at->format('Y-m-d') }}</div>
</div>

<div class="form-group">
<label>体重</label>
<div class="value">{{ $weight->weight }} kg</div>
</div>

<div class="form-group">
<label>摂取カロリー</label>
<div class="value">1200 cal</div>
</div>

<div class="form-group">
<label>運動時間</label>
<div class="value">00:15</div>
</div>

<div class="form-group">
<label>運動内容</label>
<div class="value">内容</div>
</div>

<div class="buttons">
<a href="/dashboard" class="back">戻る</a>
<a href="/weight/{{ $weight->id }}/edit" class="edit">編集</a>
</div>

</div>

</body>
</html>