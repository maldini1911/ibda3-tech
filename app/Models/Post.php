<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{

    protected $table = 'posts';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'image', 'views', 'slug', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}