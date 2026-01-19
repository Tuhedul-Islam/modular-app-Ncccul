<?php

namespace Database\Seeders;

use App\Models\Administrative\Division;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        Division::truncate();

        $divisions = [
            'Dhaka',
            'Chattogram',
            'Rajshahi',
            'Khulna',
            'Barishal',
            'Sylhet',
            'Rangpur',
            'Mymensingh',
        ];

        // Seed with auto-incremented priority
        foreach ($divisions as $index => $division) {
            Division::create([
                'priority' => $index + 1, // Priority starts at 1
                'name'     => $division,
                'status'   => 1,
            ]);
        }
    }
}
