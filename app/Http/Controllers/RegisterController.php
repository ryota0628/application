<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(Task $task)
    {
        return view("index")->with(['tasks' => $task->get()]); //カレンダー画面表示
    }
    
    public function show(Task $task)
    {
        return view('show')->with(['tasks' => $task]);//詳細画面表示
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
}