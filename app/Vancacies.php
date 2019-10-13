<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vancacies extends Model
{
    protected $fillable = [
        'id', 'property_id', 'resident_id', 'value', 'expenses_id', 'details_id', 'type', 'entrance', 'exit', 'title', 'description'
    ];
}