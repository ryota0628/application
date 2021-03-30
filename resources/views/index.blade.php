<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        [<a href='/schedules/register'>登録</a>]<!--登録ページへのリンク-->
       @for ($i=1; $i <= 31 ; $i++) 
       <div>
          {{$i}}日
       </div>
       @endfor
       
       <div class='posts'>
            @foreach ($tasks as $task)
                <div class='post'>
                    <h1><a href="/schedules/{{$task->id}}">{{ $task->votes }}</a>
                    <h2 class='title'>{{ $task->theme }}</h2>
                    <p class='body'>{{ $task->description }}</p>
                </div>
            @endforeach
        </div>
       
    </body>
</html>