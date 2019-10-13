<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $fillable = [
        'id', 'property_id', 'type'
    ];
}
