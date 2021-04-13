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
    }
}
