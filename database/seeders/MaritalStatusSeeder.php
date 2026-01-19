<?php

namespace Database\Seeders;

use App\Models\Administrative\MaritalStatus;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing data
        MaritalStatus::truncate();

        $statuses = [
            'Single',
            'Married',
            'Divorced',
            'Widowed',
            'Separated',
        ];

        // Seed with auto-incremented priority
        foreach ($statuses as $index => $status) {
            MaritalStatus::create([
                'priority' => $index + 1, // Priority starts at 1
                'name'     => $status,
                'status'   => 1,           // Active status
            ]);
        }
    }
}
