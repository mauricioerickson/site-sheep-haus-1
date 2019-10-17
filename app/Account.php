<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'id', 'property_id', 'name', 'value', 'duedate'
    ];
}
