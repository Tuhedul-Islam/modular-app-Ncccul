<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'NCCCL Admin',
        //     'email' => 'admin@gmail.com',
        //     'mobile' => '01700000000',
        // ]);

        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::factory()->create([
                'name' => 'NCCCL Admin',
                'email' => 'admin@gmail.com',
                'mobile' => '01700000000',
                'password' => '12345678',
            ]);
        }
        // Call other seeders here
        $this->call([
            \Database\Seeders\BloodGroupSeeder::class,
            \Database\Seeders\GenderSeeder::class,
            \Database\Seeders\MaritalStatusSeeder::class,
            \Database\Seeders\DivisionSeeder::class,
            \Database\Seeders\DistrictSeeder::class,
            \Database\Seeders\UpazilaSeeder::class,
            // Add other seeders as needed
        ]);
        echo "Database seeding completed!\n";

    }
}
