@extends('layouts.app')

@section('content')

<div class="modal-overlay">

<div class="modal">

<h2>Weight Logを編集</h2>

<form action="/weight/{{ $weight->id }}/update" method="POST">
@csrf

<div class="form-group">
<label>日付 <span class="required">必須</span></label>
<input type="date" name="date" value="{{ $weight->date }}">
</div>

<div class="form-group">
<label>体重 <span class="required">必須</span></label>

<div class="input-row">
<input type="text" name="weight" value="{{ $weight->weight }}">
<span>kg</span>
</div>

</div>

<div class="form-group">
<label>摂取カロリー <span class="required">必須</span></label>
<div class="input-row">
<input type="text" name="calories" value="{{ $weight->calories }}">
<span>cal</span>
</div>

<div class="form-group">
<label>運動時間 <span class="required">必須</span></label>
<input type="text" name="exercise_time" value="{{ $weight->exercise_time }}">
</div>

<div class="form-group">
<label>運動内容</label>
<textarea name="exercise_content">{{ $weight->exercise_content }}</textarea>
</div>

<div class="btn-group">
<a href="/dashboard" class="btn-back">戻る</a>
<button type="submit" class="btn-submit">更新</button>
</div>

</form>

</div>
</div>

@endsection