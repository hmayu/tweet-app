@extends('layouts.app')

@section('content')
    <div class="create-post">
        <h1>ツイートの編集</h1>
        <form method="POST" action="{{ route('tweets.update',$tweet->id)}}">
            @csrf
            @method('PUT')
            <textarea id="text" name="text" class="post-text">{{ $tweet->text }}</textarea>
            <div class="btn">
                <button class="btn-item" type="button" onclick="history.back()">キャンセル</a>
                <button class="btn-item">更新</button>
            </div>
        </form>
    </div>
@endsection