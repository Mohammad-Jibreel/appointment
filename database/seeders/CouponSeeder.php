<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Coupon;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Coupon::create(['code' => 'DISCOUNT10', 'discount' => 10.00, 'expires_at' => now()->addDays(30)]);
        Coupon::create(['code' => 'WELCOME15', 'discount' => 15.00, 'expires_at' => now()->addDays(30)]);
    }

}
