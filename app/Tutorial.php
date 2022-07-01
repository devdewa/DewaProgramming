<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tutorial extends Model
{   
    use SoftDeletes;

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    protected $table = "tutorials";
    
    protected $fillable = ['user_id', 'photo', 'judul', 'slug', 'category_id', 'slug_tag', 'deskripsi', 'body', 'isPublished'];
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getPhoto(){
        return asset('/images/post_images/'.$this->photo);
    }
}
