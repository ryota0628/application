<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
    </head>
    <body>
        <h1>予定登録</h1>
        <form action="/schedules" method="POST">
            @csrf
            <div class="date">
                <h2>いつ</h2>
                <input type="number" name="register[votes]" placeholder="日付を数字のみ入力"/>
                <p class="votes__error" style="color:red">{{ $errors->first('register.votes') }}</p>
            </div>
            <div class="title">
                <h2>テーマ</h2>
                <input type="text" name="register[theme]" placeholder="テーマ"/>
                <p class="theme__error" style="color:red">{{ $errors->first('register.theme') }}</p>
            </div>
            <div class="body">
                <h2>予定</h2>
                <textarea name="register[description]" placeholder="予定を入力"></textarea>
                <p class="description__error" style="color:red">{{ $errors->first('register.description') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>