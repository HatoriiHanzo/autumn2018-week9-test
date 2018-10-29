<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function hero(){

        return $this->belongsToMany('App\Hero');
    }
}
