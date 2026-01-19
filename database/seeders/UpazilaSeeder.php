<?php
namespace Database\Seeders;

use App\Models\Administrative\District;
use App\Models\Administrative\Upazila;
use Illuminate\Database\Seeder;

class UpazilaSeeder extends Seeder
{
    public function run(): void
    {
        // Clear old data
        Upazila::truncate();

        $districts = [

            'Dhaka' => ['Dhamrai','Dohar','Keraniganj','Nawabganj','Savar','Tejgaon'],
            'Gazipur' => ['Gazipur Sadar','Kaliakair','Tongi','Kapasia','Sreepur'],
            'Narayanganj' => ['Araihazar','Bandar','Rupganj','Sonargaon'],
            'Narsingdi' => ['Belabo','Monohardi','Narsingdi Sadar','Palash','Raipura'],
            'Munshiganj' => ['Gajaria','Lohajang','Munshiganj Sadar','Sreenagar','Tongibari'],
            'Manikganj' => ['Manikganj Sadar','Singair','Saturia','Shivalaya','Bhaluka'],
            'Tangail' => ['Tangail Sadar','Kalihati','Nagarpur','Sakhipur','Madhupur','Gopalpur','Bhuapur','Delduar','Dhanbari'],
            'Faridpur' => ['Faridpur Sadar','Boalmari','Char Bhadrasan','Madhukhali','Nagarkanda','Sadarpur','Saltha','Bhanga'],
            'Gopalganj' => ['Gopalganj Sadar','Kotalipara','Muksudpur','Tungipara','Kashiani'],
            'Rajbari' => ['Rajbari Sadar','Baliakandi','Pangsha','Kalukhali','Godagari'],
            'Shariatpur' => ['Shariatpur Sadar','Bhedarganj','Naria','Zajira','Gosairhat','Damudya'],
            'Kishoreganj' => ['Kishoreganj Sadar','Karimganj','Katiadi','Bhairab','Itna','Nikli','Pakundia','Tarail','Hossainpur'],
            'Madaripur' => ['Madaripur Sadar','Kalkini','Rajoir','Shibchar'],
            'Chattogram' => ['Chattogram Sadar','Patiya','Hathazari','Rangunia','Anwara','Banshkhali','Fatikchhari','Mirsharai','Satkania','Sandwip','Lohagara','Raozan','Boalkhali','Chandanaish','Belaichhari','Ruma','Thanchi'],
            "Cox's Bazar" => ["Cox's Bazar Sadar",'Ramu','Ukhiya','Teknaf','Maheshkhali','Kutubdia','Pekua','Chakaria','Moheshkhali'],
            'Cumilla' => ['Cumilla Sadar','Barura','Brahmanpara','Chandina','Chauddagram','Daudkandi','Debidwar','Homna','Laksam','Monohorgonj','Muradnagar','Nangalkot','Titas'],
            'Feni' => ['Feni Sadar','Daganbhuiyan','Parshuram','Fulgazi','Sonagazi'],
            'Noakhali' => ['Noakhali Sadar','Begumganj','Chatkhil','Companiganj','Hatiya','Senbagh','Subarnachar','Sonaimuri'],
            'Lakshmipur' => ['Lakshmipur Sadar','Raipur','Ramganj','Ramgati','Kamalnagar'],
            'Brahmanbaria' => ['Brahmanbaria Sadar','Ashuganj','Nabinagar','Sarail','Nasirnagar','Kasba','Bancharampur'],
            'Chandpur' => ['Chandpur Sadar','Faridganj','Haimchar','Kachua','Shahrasti'],
            'Khagrachhari' => ['Khagrachhari Sadar','Dighinala','Lakshmichhari','Mahalchhari','Manikchhari','Matiranga','Panchhari','Ramgarh'],
            'Rangamati' => ['Rangamati Sadar','Kaptai','Baghaichhari','Belaichhari','Rajasthali','Kawkhali','Jurachhari'],
            'Bandarban' => ['Bandarban Sadar','Thanchi','Naikhongchhari','Ali Kadam','Rowangchhari','Ruma','Lama'],
            'Sylhet' => ['Sylhet Sadar','Beanibazar','Balaganj','Fenchuganj','Golapganj','Gowainghat','Jaintiapur','Kanaighat','Osmani Nagar','Bishwanath','Zakiganj'],
            'Moulvibazar' => ['Moulvibazar Sadar','Barlekha','Juri','Kamalganj','Kulaura','Rajnagar','Sreemangal'],
            'Habiganj' => ['Habiganj Sadar','Ajmiriganj','Bahubal','Baniachang','Chunarughat','Madhabpur','Lakhai'],
            'Sunamganj' => ['Sunamganj Sadar','Bishwamvarpur','Chhatak','Derai','Dharampasha','Jagannathpur','Jamalganj','Sullah','Tahirpur','Dowarabazar','Shalla'],

        ];

        foreach ($districts as $districtName => $upazilas) {
            $district = District::where('name', $districtName)->first();
            if (!$district) continue;

            foreach ($upazilas as $index => $upazila) {
                Upazila::create([
                    'district_id' => $district->id,
                    'name'        => $upazila,
                    'priority'    => $index + 1,
                    'status'      => 1,
                ]);
            }
        }
    }
}
