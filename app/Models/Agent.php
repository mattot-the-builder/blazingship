<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number_e164',
        'address',
        'registration_date',
        'role',
        'total_sale',
        'earning',
        'payment_information',
    ];

    public function orders(): HasMany {
        return $this->hasMany(Order::class);
    }
}
