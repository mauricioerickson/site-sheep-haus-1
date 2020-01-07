<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'id', 'property_id', 'from', 'to', 'last_mensagem'
    ];

    public function getUserTo()
    {
        return $this->hasOne('App\User', 'id', 'to');
    }
    
    public function getUserFrom()
    {
        return $this->hasOne('App\User', 'id', 'from');
    }
}
