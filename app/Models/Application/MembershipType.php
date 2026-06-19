<?php

namespace App\Models\Application;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
    protected $fillable = [
        'membership_name',
        'price',
        'duration_months',
        'details',
        'status'
    ];
}
