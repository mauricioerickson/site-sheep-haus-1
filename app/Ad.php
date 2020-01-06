<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = [
        'id', 'src', 'link'. 'title', 'category_id', 'telephone', 'description', 'provider_id'
    ];
}
