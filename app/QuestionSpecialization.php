<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionSpecialization extends Model
{
    /**
     * This variable contains a list of variables which can be mass assigned
     */
    protected $fillable = [
        'specialization_id',
        'question_id',
    ];
}
