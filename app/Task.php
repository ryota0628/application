<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    'date',
    'theme',
    'description',
    ];
    
    public function getId($day){
        $data=$this->where('date',$day)->get();
        return $data['id'];
        //修正入る
        //→ if文使って、$dayの文字列とテーブルのdateの文字列が合致したら、該当テーブルのidを出力する
    }
}
