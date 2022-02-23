<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    use HasFactory;

    protected $fillable = [
        'billing_type',
        'network',
        'phone',
        'amount',
        'orderid',
        'transRef',
        'statuscode',
        'status',
        'user_id'
    ];
}
