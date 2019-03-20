<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //

    public function programme(){
        return $this->belongsTo(Programme::class);
        
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function venue(){
        return $this->hasOne(Venue::class);
    }

    public function timetable(){
        return $this->hasOne(Timetable::class);
    }
   
    public function level(){
        return $this->belongsTo(Level::class);
    }
}
