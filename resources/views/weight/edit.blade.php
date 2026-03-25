<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>体重編集</title>

<style>
body{
margin:0;
font-family:sans-serif;
background:rgba(0,0,0,0.3);
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.modal{
background:white;
width:500px;
padding:30px;
border-radius:10px;
}

.form-group{
margin-bottom:15px;
}

label{
display:block;
margin-bottom:5px;
}

input,textarea{
width:100%;
padding:10px;
border:1px solid #ddd;
border-radius:5px;
}

.buttons{
display:flex;
justify-content:space-between;
margin-top:20px;
}

.back{
background:#ddd;
border:none;
padding:10px 20px;
border-radius:5px;
}

.submit{
background: linear-gradient(90deg,#a18cd1,#fbc2eb);
border:none;
padding:10px 20px;
border-radius:5px;
color:white;
}
</style>
</head>

<body>

<div class="modal">

<h2>Weight Logを編集</h2>

<form action="/weight/{{ $weight->id }}/update" method="POST">
@csrf

<div class="form-group">
<label>日付</label>
<input type="date" name="date" value="{{ $weight->created_at->format('Y-m-d') }}">
</div>

<div class="form-group">
<label>体重</label>
<input type="text" name="weight" value="{{ $weight->weight }}">
</div>

<div class="form-group">
<label>摂取カロリー</label>
<input type="text" name="calorie">
</div>

<div class="form-group">
<label>運動時間</label>
<input type="text" name="exercise_time">
</div>

<div class="form-group">
<label>運動内容</label>
<textarea name="exercise_content"></textarea>
</div>

<div class="buttons">
<a href="/dashboard">
<button type="button" class="back">戻る</button>
</a>

<button type="submit" class="submit">更新</button>
</div>

</form>

</div>

</body>
</html>