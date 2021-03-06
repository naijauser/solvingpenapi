<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    /**
     * This variable contains an array of columns which can be mass assigned
     * 
     * @var array
     */
    protected $fillable = [
        'intrest_description',
        'intrest_name',
    ];

    /**
    * Indicates if the model should be timestamped
    * 
    * @var boolean
    */
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
