<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VHabit extends Model
{
    protected $fillable = [
        'id', 'property_id', 'habit_id'
    ];
}
