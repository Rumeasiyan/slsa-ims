<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        $districts = [
            ['district_name' => 'Akk/Kalmunai', 'province_id' => 2],
            ['district_name' => 'Ampara', 'province_id' => 2],
            ['district_name' => 'Anuradhapura', 'province_id' => 3],
            ['district_name' => 'Avissawella', 'province_id' => 7],
            ['district_name' => 'Badulla', 'province_id' => 8],
            ['district_name' => 'Batticaloa', 'province_id' => 2],
            ['district_name' => 'Chilaw', 'province_id' => 4],
            ['district_name' => 'Colombo', 'province_id' => 9],
            ['district_name' => 'Galle', 'province_id' => 7],
            ['district_name' => 'Gampaha', 'province_id' => 9],
            ['district_name' => 'Hambantota', 'province_id' => 6],
            ['district_name' => 'Homagama', 'province_id' => 9],
            ['district_name' => 'Jaffna', 'province_id' => 5],
            ['district_name' => 'Kalutara', 'province_id' => 9],
            ['district_name' => 'Kandy', 'province_id' => 1],
            ['district_name' => 'Kankasanturai', 'province_id' => 5],
            ['district_name' => 'Kegalle', 'province_id' => 1],
            ['district_name' => 'Kilinochchi', 'province_id' => 5],
            ['district_name' => 'Kurunegala', 'province_id' => 4],
            ['district_name' => 'Mannar', 'province_id' => 5],
            ['district_name' => 'Matale', 'province_id' => 1],
            ['district_name' => 'Matara', 'province_id' => 6],
            ['district_name' => 'Monaragala', 'province_id' => 8],
            ['district_name' => 'Mo/Piliyandala', 'province_id' => 9],
            ['district_name' => 'Mullativu', 'province_id' => 5],
            ['district_name' => 'NHQ', 'province_id' => 10],
            ['district_name' => 'Nawalapitiya', 'province_id' => 1],
            ['district_name' => 'Negombo', 'province_id' => 9],
            ['district_name' => 'Nuwara Eliya', 'province_id' => 1],
            ['district_name' => 'Pa/Horana', 'province_id' => 9],
            ['district_name' => 'Point Pedro', 'province_id' => 5],
            ['district_name' => 'Polonnaruwa', 'province_id' => 3],
            ['district_name' => 'Puttalama', 'province_id' => 4],
            ['district_name' => 'Ratnapura', 'province_id' => 6],
            ['district_name' => 'Trincomalee', 'province_id' => 2],
            ['district_name' => 'Vavuniya', 'province_id' => 5],
            ['district_name' => 'Wattala/Ja Ela', 'province_id' => 9],
            ['district_name' => 'Wennappuwa', 'province_id' => 4],
        ];

        foreach ($districts as $district) {
            DB::table('districts')->insert([
                'district_name' => $district['district_name'],
                'province_id' => $district['province_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
