<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name' , 'email', 'password', 'email_verified_at',
        'api_token' , 'user_type' , 'liked_posts' ,
        'disliked_posts' , 'favourite_posts' , 'favourite_categories',
        'preferences' , 'avatar' ,
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

    public function posts(){
        return $this->hasMany( Post::class , 'author_id' , 'id' );
    }

    public function comments(){
        return $this->hasMany( Comment::class , 'author_id' , 'id' );
    }

}
