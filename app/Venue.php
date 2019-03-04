<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    //
    public function course(){
        return $this->belongsTo(Venue::class);
        }
}
