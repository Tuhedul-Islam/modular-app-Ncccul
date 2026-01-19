<?php

namespace Database\Seeders;

use App\Models\Administrative\BloodGroup;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         BloodGroup::truncate();

         $bloodGroups = [
            'O+' ,
            'O-' ,
            'A+' ,
            'A-' ,
            'B+' ,
            'B-' ,
            'AB+',
            'AB-',
         ];
         foreach ($bloodGroups as $index => $bloodGroup){
            BloodGroup::create([
                'priority' => $index + 1, // Priority starts at 1
                'name' => $bloodGroup,
                'status' => 1,
            ]);
         }

    }
}
