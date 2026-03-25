<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>体重管理</title>

<style>
body{
margin:0;
font-family:sans-serif;
background:#f5f5f5;
}

.header{
display:flex;
justify-content:space-between;
align-items:center;
padding:20px 40px;
background:white;
border-bottom:1px solid #eee;
}

.logo{
color:#d291ff;
font-size:24px;
}

.header-buttons button{
margin-left:10px;
padding:8px 14px;
border-radius:6px;
border:1px solid #ccc;
background:white;
}

.container{
width:80%;
margin:40px auto;
}

.cards{
display:flex;
gap:20px;
margin-bottom:20px;
}

.card{
flex:1;
background:white;
padding:20px;
border-radius:10px;
text-align:center;
box-shadow:0 3px 10px rgba(0,0,0,0.05);
}

.table{
background:white;
border-radius:10px;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
padding:10px;
border-bottom:1px solid #eee;
text-align:left;
}

.add-btn{
float:right;
padding:10px 20px;
border:none;
border-radius:8px;
color:white;
background: linear-gradient(90deg,#a18cd1,#fbc2eb);
}

.table input{
padding:8px;
border:1px solid #ddd;
border-radius:5px;
}

.table button{
padding:8px 12px;
border-radius:5px;
border:1px solid #ccc;
background:white;
}

</style>

</head>
<body>

<div class="header">
<div class="logo">PiGLy</div>

<div class="header-buttons">
<button>目標体重設定</button>
<button>ログアウト</button>
</div>
</div>

<div class="container">

<div class="cards">
<div class="card">
<p>目標体重</p>
<h2>45.0 kg</h2>
</div>

<div class="card">
<p>目標まで</p>
<h2>-1.5 kg</h2>
</div>

<div class="card">
<p>最新体重</p>
<h2>46.5 kg</h2>
</div>
</div>

<div class="table">


<div style="display:flex; justify-content:space-between; margin-bottom:20px;">

<div>
<input type="date">
〜
<input type="date">
<button>検索</button>
</div>

<button class="add-btn">データ追加</button>

</div>

<table>
<tr>
<th>日付</th>
<th>体重</th>
<th>摂取カロリー</th>
<th>運動時間</th>
<th></th>
</tr>

@foreach($weights as $weight)
<tr>
<td>{{ $weight->created_at->format('Y/m/d') }}</td>
<td>{{ $weight->weight }}kg</td>
<td>1200cal</td>
<td>00:15</td>
<td>
<a href="/weight/{{ $weight->id }}">詳細</a>    
<a href="/weight/{{ $weight->id }}/edit">✏️</a>    
<a href="/weight/create" class="add-btn">データ追加</a>
</td>
</tr>

@endforeach


</table>


</div>

</div>

</div>

</body>
</html>