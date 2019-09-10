<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'username', 'password',
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

    // When user register create blank profile for that user
    protected static function boot(){
        
        parent::boot(); 

        static::created( function( $user ){
            $user->profile()->create([
                'title' => $user->username
            ]);
        } );
    }

    // connection between user and posts

    public function posts(){

        return $this->hasMany( Post::class )->orderBy('created_at', 'DESC' );
    }

    // define connection between user and profile

    public function profile(){

        return $this->hasOne(Profile::class);
    }
}
