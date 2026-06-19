<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'user_id',
        'food_type_id',
        'name',
        'phone',
        'amount',
        'payment_status',
        'transaction_id'
    ];
}