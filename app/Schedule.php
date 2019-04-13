<?php

namespace myTimeTable;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    // 
    public function course(){
    return $this->belongsTo(Course::class);
    }
}
