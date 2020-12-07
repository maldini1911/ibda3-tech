<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model 
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('title', 'content', 'image', 'is_active', 'slug', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}