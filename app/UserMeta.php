<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMeta extends Model
{
    /**
     * Table name associated with model
     * 
     * @var string
     */
    protected $table = 'users_meta';

    /**
     * This variable contains an array of variables which can be mass assigned
     */
    protected $fillable = [
        'user_id',
        'interest_id', 
        'profile_pic',
        'date_of_birth',
        'website',
        'gender',
        'phone',
        'points',
        'description'


    ];


    /**
     * Set model relationship with User model
     */
    public function user () {
        return $this->belongsTo('App\User');
    }


}
