<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    //
    protected $fillable = [
        'intrest_description',
        'intrest_name',
    ];


    public function users(){
        return $this->hasMany(User::class);
    }

}
