@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="tweets">
            <div class="tweet-head">
                <p class="tweet-name">{{ $tweet->user()->value('name') }}</p>
                <div class="head-btn">
                    @if (Auth::id() == $tweet->user_id )
                    <button type="button" onclick="location.href = '{{ route('tweets.edit', $tweet->id) }}'">編集</button>
                    <button type="button" onclick="location.href = '{{ route('tweets.destroy', $tweet->id) }}'">削除</button>
                    @endif
                </div>
            </div>

            <p class="tweet-text">{{ $tweet->text }}</p>

            <p class="tweet-text">コメントテキストコメントテキストコメントテキストコメントテキストコメントテキストコメントテキスト</p>
            <textarea class="tweet-textarea"></textarea>
            <div>
                <button>送信</button>
            </div>
        </div>
    </div>
@endsection