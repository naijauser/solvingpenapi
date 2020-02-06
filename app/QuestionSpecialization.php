<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionSpecialization extends Model
{
    /**
     * This variable contains an array of columns which can be mass assigned
     * 
     * @var array
     */
    protected $fillable = [
        'specialization_id',
        'question_id',
    ];
}
