<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social_Media extends Model 
{

    protected $table = 'social_media';
    public $timestamps = true;
    protected $fillable = array('icon_name', 'media_name');

}