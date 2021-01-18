<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['content','status'];
    
    
    /**
     * このユーザーを所有するユーザー。(Userモデルとの関係を定義)
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
