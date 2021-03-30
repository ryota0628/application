<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
    </head>
    <body>
        <h1>予定登録</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>テーマ</h2>
                <input type="text" name="register[title]" placeholder="テーマ"/>
            </div>
            <div class="body">
                <h2>予定</h2>
                <textarea name="register[body]" placeholder="予定を入力"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>