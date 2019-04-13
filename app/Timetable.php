<?php

namespace myTimeTable;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    //
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function programme(){
        return $this->belongsTo(Programme::class);
    }
}
