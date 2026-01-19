<?php

namespace Database\Seeders;

use App\Models\Administrative\UserType;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{

    public function run(): void
     {
        UserType::truncate();

        $number = 10;

        for($i = 1; $i<=$number; $i++){
            UserType::create([
                'priority' => $i,
                'name'     => 'User Type ' . $i,
                'status'   => 1,
            ]);
        }
    }
}
