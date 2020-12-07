<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model 
{

    protected $table = 'settings';
    public $timestamps = true;
    protected $fillable = array('logo_nav', 'logo_footer', 'intro_image', 'slogan', 'address', 'status_website', 'maintenance_message');

}