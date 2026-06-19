<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $fillable = [
        'food_name',
        'price',
        'details',
        'status'
    ];
}