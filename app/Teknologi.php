<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teknologi extends Model
{   
    use SoftDeletes;

    protected $table = "teknologi";
    
    protected $fillable = ['user_id', 'category_id', 'judul', 'body', 'isPublished', 'photo', 'slug', 'category', 'slug_tag', 'deskripsi'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getPhoto(){
        return asset('/images/post_images/'.$this->photo);
    }

}
