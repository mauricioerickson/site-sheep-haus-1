<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'id', 'property_id', 'from', 'to', 'mensagem'
    ];
}
