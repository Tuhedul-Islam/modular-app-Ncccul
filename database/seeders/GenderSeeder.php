<?php

namespace Database\Seeders;

use App\Models\Administrative\Gender;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        Gender::truncate();

        $genders = [
            'Male',
            'Female',
            'Others',
        ];

        // Seed with auto-incremented priority
        foreach ($genders as $index => $gender) {
            Gender::create([
                'priority' => $index + 1, // Priority starts at 1
                'name'     => $gender,
                'status'   => 1,
            ]);
        }
    }
}
