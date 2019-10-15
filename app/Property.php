<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'type', 
        'characteristics_id', 
        'number_of_bedrooms', 
        'number_of_bathrooms', 
        'number_of_residents', 
        'property_size', 
        'address', 
        'cep', 
        'district', 
        'city', 
        'number', 
        'gallery_id', 
        'accounts_id', 
        'university_id', 
        'course_id', 
        'habits_id', 
        'owner_id'
    ];

    protected $casts = [
        'characteristics_id' => 'array',
        'habits_id' => 'array',
    ];
}