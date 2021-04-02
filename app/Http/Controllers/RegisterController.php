<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Task $task)
    {
        return view("index")->with(['tasks' => $task->get()]); //カレンダー画面表示
        //     viewのファイル名　　　viewに渡す変数名(tasks)に、データを代入(get())したインスタンス($task)を持たせる。
        //                           変数名はviewの変数名と対応させる!
    }
    
    public function show(Task $task)
    {
        return view('show')->with(['task' => $task]);//詳細画面表示
        //                                   idがurlについてるので、自動的にidに対応したデータを持ってきてくれる(DI)
    }
    
    public function register()
    {
        return view('register');//登録画面表示
    }
    
    public function store(Request $request, Task $task)
    {
    $input = $request['register'];
    $task->fill($input)->save();//登録保存
    return redirect('/');
    }
    
    public function edit(Task $task)
    {
    return view("edit")->with(['task' => $task]);//編集画面表示
    }
    
    public function update(Request $request, Task $task)
    {
    $input_register = $request['register'];
    $task->fill($input_register)->save();//編集機能
    return redirect('/schedules/' . $task->id);
    }
}