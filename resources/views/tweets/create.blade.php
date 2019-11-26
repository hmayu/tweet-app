@extends('layouts.app')

@section('content')
    <div class="create-post">
        <h1>新規投稿</h1>
        <form method="POST" action="{{ route('tweets.store', ['user_id'=>'1']) }}">
            @csrf
            <textarea id="text" name="text" class="post-text"></textarea>
            <div class="btn">
                <a href="{{ route('tweets.index') }}" class="btn-item">キャンセル</a>
                <button class="btn-item">投稿</button>
            </div>
        </form>
    </div>
@endsection