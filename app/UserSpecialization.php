<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpecialization extends Model
{
    /**
     * This variable contains an array of columns which can be mass assignable
     * 
     * @var array
     */
     protected $fillable = [
         'specialization_id',
         'user_id',
     ];
}
