<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSpecialization extends Model
{
    /**
     * This variable contains a list of variables which can be mass assigned
     */

     protected $fillable = [
         'specialization_id',
         'user_id',
     ];
}
