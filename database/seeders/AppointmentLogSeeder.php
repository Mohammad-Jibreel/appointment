<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AppointmentLog;

class AppointmentLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        AppointmentLog::factory(20)->create(); // Creates 20 fake appointment logs
    }
}
