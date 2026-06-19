<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $fillable = [
        'user_id',
        'membership_type_id',
        'name',
        'phone',
        'amount',
        'purchase_date',
        'expiry_date',
        'payment_status',
        'status'
    ];
}
