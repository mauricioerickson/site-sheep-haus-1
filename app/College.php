<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $fillable = [
        'id', 'iniciais', 'name', 'organization', 'parents', 'state', 'city'
    ];
}
