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
    
    
    public static function getId($day){
        
        $data=self::where('date',$day)->get();//$dayには$day->carbon->format('Y-m-d')が代入される。calendarViewでその処理をしている。
        
        
        if (empty($data[0] )) {
             return 'register';
        }
        else{
            //dd($data[0]['id']);
            return $data[0]['id'];//2重配列の取り出し方にする
            
        }
    }
}
