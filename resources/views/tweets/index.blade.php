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
            <a class="my-navbar-title" href="#">Tweet</a>
            <div class="my-navbar-item">
                <a class="item" href="#">サインイン</a>
                |
                <a class="item" href="#">サインアップ</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            {{-- @foreach ($posts as $post) --}}
                <div class="tweets">
                    <a href="#" class="tweet-name">投稿者</a>
                    <a href="#" class="tweet-text">
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </a>
                </div>
                <div class="tweets">
                    <a href="#" class="tweet-name">投稿者</a>
                    <a href="#" class="tweet-text">
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </a>
                </div>
                <div class="tweets">
                    <a href="#" class="tweet-name">投稿者</a>
                    <a href="#" class="tweet-text">
                        <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </a>
                </div>
            {{-- @endforeach --}}
        </div>
    </main>
</body>
</html>