<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    //
    protected $fillable = [
        'vote_description',
        'vote_type',
    ];


    public function answers(){
        return $this->belongsTo(Answer::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
