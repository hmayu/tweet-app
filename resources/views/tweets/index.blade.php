@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($tweets as $tweet)
            <div class="tweets">
                @if (Auth::check())
                    <a href="#" class="tweet-name">{{ $tweet->user()->value('name') }}</a>
                    <a href="#" class="tweet-text">
                        <p>{{ $tweet->text }}</p>
                    </a>
                @else
                    <p class="tweet-name">{{ $tweet->user()->value('name') }}</p>
                    <p class="tweet-text">{{ $tweet->text }}</p>
                @endif
            </div>
        @endforeach
    </div>
@endsection