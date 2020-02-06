<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $fillable = [
        'user_id',
        'question_title',
        'question_text_area',
        'question_attachment_url',
        'question_file',
        // 'question_state',
    ];


    public function specializations(){
        return $this->belongsToMany(Specialization::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function answer(){
        return $this->hasMany(Answer::class);
    }

}
