<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'id', 'property_id', 'from', 'to', 'mensagem'
    ];
}
