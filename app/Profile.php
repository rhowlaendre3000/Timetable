<?php

namespace myTimeTable;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    //
    
   protected $fillable=['image'];


    public function user(){
        return $this->BelongsTo('myTimeTable\User');
    }
}
