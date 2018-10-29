<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'hero_image';
    protected $fillable = ['hero_id', 'image_id'];
    
    public function image(){

        return $this->belongsToMany('App\Image');
    }
}
