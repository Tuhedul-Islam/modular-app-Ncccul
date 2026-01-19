<?php

namespace Database\Seeders;

use App\Models\Administrative\District;
use App\Models\Administrative\Division;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {

        District::truncate();

        $divisions = [
            'Dhaka' => [
                'Dhaka',
                'Gazipur',
                'Narayanganj',
                'Narsingdi',
                'Munshiganj',
                'Manikganj',
                'Tangail',
                'Kishoreganj',
                'Faridpur',
                'Gopalganj',
                'Madaripur',
                'Rajbari',
                'Shariatpur',
            ],

            'Chattogram' => [
                'Chattogram',
                'Cox\'s Bazar',
                'Cumilla',
                'Feni',
                'Noakhali',
                'Lakshmipur',
                'Brahmanbaria',
                'Chandpur',
                'Khagrachhari',
                'Rangamati',
                'Bandarban',
            ],

            'Rajshahi' => [
                'Rajshahi',
                'Natore',
                'Naogaon',
                'Chapainawabganj',
                'Pabna',
                'Sirajganj',
                'Joypurhat',
                'Bogura',
            ],

            'Khulna' => [
                'Khulna',
                'Jessore',
                'Satkhira',
                'Bagerhat',
                'Narail',
                'Magura',
                'Jhenaidah',
                'Kushtia',
                'Chuadanga',
                'Meherpur',
            ],

            'Barishal' => [
                'Barishal',
                'Bhola',
                'Patuakhali',
                'Pirojpur',
                'Jhalokathi',
                'Barguna',
            ],

            'Sylhet' => [
                'Sylhet',
                'Moulvibazar',
                'Habiganj',
                'Sunamganj',
            ],

            'Rangpur' => [
                'Rangpur',
                'Dinajpur',
                'Thakurgaon',
                'Panchagarh',
                'Nilphamari',
                'Lalmonirhat',
                'Kurigram',
                'Gaibandha',
            ],

            'Mymensingh' => [
                'Mymensingh',
                'Jamalpur',
                'Sherpur',
                'Netrokona',
            ],
        ];

        foreach($divisions as $divisionName => $districts){
            $division = Division::where('name', $divisionName)->first();
            if(!$division) continue;
            foreach($districts as $index => $district){
                 District::create([
                    'division_id' => $division->id,
                    'name'        => $district,
                    'priority'    => $index + 1,
                ]);
            }
        }

        // foreach ($divisions as $divisionName => $districts) {

        //     $division = Division::where('name', $divisionName)->first();

        //     if (!$division) continue;

        //     foreach ($districts as $index => $district) {
        //         District::create([
        //             'division_id' => $division->id,
        //             'name'        => $district,
        //             'priority'    => $index + 1,
        //         ]);
        //     }
        // }
    }
}
