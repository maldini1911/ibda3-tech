<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = array('name', 'image', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
