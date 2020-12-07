<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model 
{

    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'image', 'cover_image', 'slug', 'user_id');

    public function photos()
    {
        return $this->hasMany('App\Models\Photo');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}