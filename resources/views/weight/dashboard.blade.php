@extends('layouts.app')

@section('content')

<h2>Pigly</h2>

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

<div class="table-box">

<a href="/weight/create" class="add-btn">データ追加</a>

<br><br>

<table>
<tr>
    <th>日付</th>
    <th>体重</th>
    <th>摂取カロリー</th>
    <th>運動時間</th>
    <th>操作</th>
</tr>

@foreach($weights as $weight)
<tr>
    <td>{{ $weight->date }}</td>
    <td>{{ $weight->weight }}</td>
    <td>{{ $weight->calories }}</td>
    <td>{{ $weight->exercise_time }}</td>
    <td>
        <a href="/weight/{{ $weight->id }}">詳細</a>
        <a href="/weight/{{ $weight->id }}/edit">編集</a>

        <form action="/weight/{{ $weight->id }}/delete" method="POST" style="display:inline;">
            @csrf
            <button type="submit" onclick="return confirm('削除しますか？')">
                削除
            </button>
        </form>
    </td>
</tr>
@endforeach

</table>

</div>

@endsection