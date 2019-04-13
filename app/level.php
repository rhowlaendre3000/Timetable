<?php

namespace myTimeTable;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //

 public function course(){
     return $this->hasMany(Course::class);
 }
    
}
