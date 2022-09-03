<?php

namespace Database\Seeders;

use App\Models\Trainings;
use Illuminate\Database\Seeder;

class TrainingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainings::factory()->count(50)->create();
    }
}
