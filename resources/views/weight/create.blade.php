@extends('layouts.app')

@section('content')

<div class="form-container">
    <h2>Weight Logを追加</h2>

    <form method="POST" action="{{ route('weight.store') }}">
    @csrf

    <div class="form-group">
        <label>
            日付
            <span class="required">必須</span>
        </label>
        <input type="date" name="date" value="{{ old('date') }}">
        @error('date')
            <div style="color:red;font-size:12px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>
            体重
            <span class="required">必須</span>
        </label>
        <input type="text" name="weight" value="{{ old('weight') }}">
        @error('weight')
            <div style="color:red;font-size:12px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>
            摂取カロリー
            <span class="required">必須</span>
        </label>
        <input type="text" name="calories" value="{{ old('calories') }}">
        @error('calories')
            <div style="color:red;font-size:12px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>
            運動時間
            <span class="required">必須</span>
        </label>
        <input type="text" name="exercise_time" value="{{ old('exercise_time') }}">
        @error('exercise_time')
            <div style="color:red;font-size:12px;">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>運動内容</label>
        <textarea name="exercise_content">{{ old('exercise_content') }}</textarea>
        @error('exercise_content')
            <div style="color:red;font-size:12px;">{{ $message }}</div>
        @enderror
    </div>

    <button class="submit-btn">登録</button>

    </form>
</div>

@endsection