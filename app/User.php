<?php

namespace myTimeTable;

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
        'name', 'email', 'password','admin',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function programme(){
        return $this->belongsTo(Programme::class);
    }

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function timetable(){
        
        return $this->hasManyThrough(Timetable::class, Programme::class);
    }


    public function level(){
        return $this->belongsTo(Level::class);
    }
}
