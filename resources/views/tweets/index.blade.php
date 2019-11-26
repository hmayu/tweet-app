@extends('layout')

@section('content')
    <div class="container">
        {{-- <div class="container-btn">
        </div> --}}
        @foreach ($tweets as $tweet)
            <div class="tweets">
                <a href="#" class="tweet-name">{{ $tweet->user()->value('name') }}</a>
                <a href="#" class="tweet-text">
                    <p>{{ $tweet->text }}</p>
                </a>
            </div>
        @endforeach
    </div>
@endsection