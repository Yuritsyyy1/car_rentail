<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
     protected $fillable = [
      
        'brand_id',
        'model',
        'year',
        'color',
        'license_plate',
        'mileage',
        'lat',
        'ing',
        'is_premium',
        'rental_count',
        'daily_rate',
        'status',
    
    ];
    
}
