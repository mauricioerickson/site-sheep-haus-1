<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    protected $fillable = [
        'id', 'property_id', 'name', 'value', 'birthday'
    ];
}
