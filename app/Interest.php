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


    public function users(){
        return $this->hasMany(User::class);
    }

}
