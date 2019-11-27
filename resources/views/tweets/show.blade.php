@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="tweets">
            <div class="tweet-head">
                <p class="tweet-name">{{ $tweet->user()->value('name') }}</p>
                <div class="head-btn">
                    <button>コメントを書く</button>
                    @if (Auth::check())
                    <button>編集</button>
                    <button>削除</button>
                    @endif
                </div>
            </div>

            <p class="tweet-text">{{ $tweet->text }}</p>

            <p class="tweet-text">コメントテキストコメントテキストコメントテキストコメントテキストコメントテキストコメントテキスト</p>
        </div>
    </div>
@endsection