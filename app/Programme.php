<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    //
   public function course(){
       return $this->hasMany(Course::class);
   }

   public function user(){
       return $this->hasMany(User::class);
   }
   
   public function timetable(){
       return $this->hasMany(Timetable::class);
   }
 
}
