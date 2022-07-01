<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function tutorial(){
    	return $this->hasMany('App\Tutorial');
    }

    protected $table = "category";

    protected $fillable = ['category', 'slug'];

    public function getPhoto(){
        return asset('/images/post_images/'.$this->photo);
    }
}
