<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialization extends Model
{
    /**
     * This variable contains an array of columns which can be mass assigned
     * 
     * @var array
     */
    protected $fillable = [
        'specialization_title',
        'specialization_description',
    ];

    public function questions(){
        return $this->belongsToMany(Question::class);
    }
    public function users(){
        return $this->belongsToMany(User::class);
    }

}
