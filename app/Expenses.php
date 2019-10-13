<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    protected $fillable = [
        'id', 'vacancy_id', 'name', 'value'
    ];
}
