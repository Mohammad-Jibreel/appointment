<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /** @use HasFactory<\Database\Factories\CouponFactory> */
    use HasFactory;
    protected $fillable = [
        'code', 'discount', 'expires_at'
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

}
