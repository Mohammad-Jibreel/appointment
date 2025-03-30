<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WaitingList;

class WaitingListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        WaitingList::factory(10)->create(); // Creates 10 fake waiting list entries
    }
}
