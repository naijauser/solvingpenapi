<?php

namespace App;
use App\Notifications\ResetPasswordNotification;
use App\notifications\VerifyApiEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
        'points',
        'interest',
        'profile_pic',
        'd_o_b',
        'website',
        'gender',
        'phone',
        'interest_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendApiEmailVerificationNotification() {
        $this->notify(new VerifyApiEmail); // my notification
    }

    public function sendPasswordResetNotification($token){
        $this->notify(new ResetPasswordNotification($token));
    }

    // relationships
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function answers(){
        return $this->hasMany(Answer::class);
    }
    public function specializations(){
        return $this->belongsToMany(Specialization::class);
    }
    public function votes(){
        return $this->hasMany(Vote::class);
    }
    public function interest(){
        return $this->belongsTo(Interest::class);
    }

    /**
     * Establish users table relationship to the user_meta table
     */
    public function user_meta () {
        return $this->hasOne('App\UserMeta');
    }
}
