<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ServiceProviderSeeder::class,
            ServiceSeeder::class,
            AppointmentSeeder::class,
            PaymentSeeder::class,
            AvailabilitySeeder::class,
            WorkingHourSeeder::class,
            ReviewSeeder::class,
            NotificationSeeder::class,
            CategorySeeder::class,
            WaitingListSeeder::class,
            CouponSeeder::class,
            AppointmentLogSeeder::class,
            EmployeeSeeder::class,
        ]);

    }
}
