<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Schedule</title>
    </head>
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/schedules/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="date">
                <h2>いつ</h2>
                <input type="number" name="register[votes]" value="{{ $task->votes }}" >
                <p class="votes__error" style="color:red">{{ $errors->first('register.votes') }}</p>
            </div>
            <div class="title">
                <h2>テーマ</h2>
                <input type="text" name="register[theme]" value="{{ $task->theme}}">
                <p class="theme__error" style="color:red">{{ $errors->first('register.theme') }}</p>
            </div>
            <div class="body">
                <h2>予定</h2>
                <textarea name="register[description]" balue="{{ $task->description}}"></textarea>
                <p class="description__error" style="color:red">{{ $errors->first('register.description') }}</p>
            </div>
            </div>
            
            <input type="submit" value="保存">
        </form>
    </div>
</body>