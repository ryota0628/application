<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>詳細</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="date">
            {{ $task->votes }}
        </h1>
        <h2 class="title">
            {{ $task->theme }}
        </h2>
        <p class='body'>
            {{ $task->description }}
        </p>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>