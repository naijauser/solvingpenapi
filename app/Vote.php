<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    protected $fillable = [
        'user_id',
        'answer_id',
    ];


    public function answers(){
        return $this->belongsTo(Answer::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
