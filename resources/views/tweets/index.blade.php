<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tweet</title>
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/normalize.css">
</head>
<body>
    <header>
        <nav class="my-navbar">
            <div class="my-navbar-item">
                <a class="title" href="#">Tweet</a>
                <a href="{{ route('tweets.create') }}" class="create-item">新規投稿</a>
            </div>
            <div class="my-navbar-account">
                <a class="item" href="#">サインイン</a>
                |
                <a class="item" href="#">サインアップ</a>
            </div>
        </nav>
    </header>

    <main>
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
    </main>
</body>
</html>