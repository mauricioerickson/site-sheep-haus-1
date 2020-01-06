<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MHabit extends Model
{
    protected $fillable = [
        'id', 'user_id', 'habit_id'
    ];
}
