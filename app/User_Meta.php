<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Meta extends Model
{
    /**
     * Table name associated with model
     * @var string
     */
    protected $table = 'users_meta';

    /**
     * Set model relationship with users table
     */
    public function user () {
        return $this->belongsTo('App\User');
    }


}
