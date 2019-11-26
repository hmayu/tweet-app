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
    </main>
</body>
</html>