<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = [
        'answer_id',
        'user_id',
        'question_id',
        'answer_text_area',
        'answer_attachment_url',
        'answer_file',
        'best_answer',
    ];

    public function votes(){
        return $this->hasMany(Vote::class);
    }
    public function questions(){
        return $this->belongsTo(Question::class);
    }
    public function users(){
        return $this->belongsTo(User::class);
    }

}
