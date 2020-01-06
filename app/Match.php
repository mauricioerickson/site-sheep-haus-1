<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $fillable = [
        'id', 'property_id', 'user_id'
    ];

    public function user()
    {
        return $this->hasOne('App\User', 'id');
    }

}
