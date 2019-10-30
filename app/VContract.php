<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VContract extends Model
{
    protected $fillable = [
        'user_id', 'property_id', 'vacancy_id', 
    ];
}
