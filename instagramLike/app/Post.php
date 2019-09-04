<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Define link beetween post and user who post it

    public function user(){

        return $this->belongsTo( User::class );
    }
}
