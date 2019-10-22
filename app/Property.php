<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name', 
        'description', 
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
        'state',
        'number',
        'country',
        'lat',
        'lng',
        'user_id'
    ];

    protected $casts = [
        'characteristics_id' => 'array',
        'habits_id' => 'array',
    ];

    public function galeries()
    {
        return $this->hasMany('App\Gallery');
    }

    public function ihabit()
    {
        return $this->hasMany('App\IHabit');
    }

}