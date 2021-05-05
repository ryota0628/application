<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests\PostRequest;

class RegisterController extends Controller
{

    public function show(Task $task)
    {
        return view('show')->with(['task' => $task]);//詳細画面表示
        //                                   idがurlについてるので、自動的にidに対応したデータを持ってきてくれる(DI)
    }
    
    public function register()
    {
        return view('register');//登録画面表示
    }
    
    public function store(Task $task, PostRequest $request)
    {
    $input = $request['register'];
    $task->fill($input)->save();//登録保存
    return redirect('/');
    }
    
    public function edit(Task $task)
    {
    return view("edit")->with(['task' => $task]);//編集画面表示
    }
    
    public function update(PostRequest $request, Task $task)
    {
    $input_register = $request['register'];
    $task->fill($input_register)->save();//編集したのをセーブする
    return redirect('/schedules/' . $task->id);
    }
    
    public function delete(Task $task)
    {
    $task->delete();
    return redirect('/');//削除機能
    }
}