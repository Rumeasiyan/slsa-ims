<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    public function run(): void
    {
        $districts = [
            ['id' => 1, 'name' => 'Akkaraipattu/Kalmunai', 'province_id' => 2],
            ['id' => 2, 'name' => 'Ampara', 'province_id' => 2],
            ['id' => 3, 'name' => 'Anuradhapura', 'province_id' => 3],
            ['id' => 4, 'name' => 'Avissawella', 'province_id' => 7],
            ['id' => 5, 'name' => 'Badulla', 'province_id' => 8],
            ['id' => 6, 'name' => 'Batticaloa', 'province_id' => 2],
            ['id' => 7, 'name' => 'Chilaw', 'province_id' => 4],
            ['id' => 8, 'name' => 'Colombo', 'province_id' => 9],
            ['id' => 9, 'name' => 'Galle', 'province_id' => 7],
            ['id' => 10, 'name' => 'Gampaha', 'province_id' => 9],
            ['id' => 11, 'name' => 'Hambantota', 'province_id' => 6],
            ['id' => 12, 'name' => 'Homagama', 'province_id' => 9],
            ['id' => 13, 'name' => 'Jaffna', 'province_id' => 5],
            ['id' => 14, 'name' => 'Kalutara', 'province_id' => 9],
            ['id' => 15, 'name' => 'Kandy', 'province_id' => 1],
            ['id' => 16, 'name' => 'Kankasanturai', 'province_id' => 5],
            ['id' => 17, 'name' => 'Kegalle', 'province_id' => 1],
            ['id' => 18, 'name' => 'Kilinochchi', 'province_id' => 5],
            ['id' => 19, 'name' => 'Kurunegala', 'province_id' => 4],
            ['id' => 20, 'name' => 'Mannar', 'province_id' => 5],
            ['id' => 21, 'name' => 'Matale', 'province_id' => 1],
            ['id' => 22, 'name' => 'Matara', 'province_id' => 6],
            ['id' => 23, 'name' => 'Monaragala', 'province_id' => 8],
            ['id' => 24, 'name' => 'Moratuwa/Piliyandala', 'province_id' => 9],
            ['id' => 25, 'name' => 'Mullativu', 'province_id' => 5],
            ['id' => 26, 'name' => 'NHQ', 'province_id' => 9],
            ['id' => 27, 'name' => 'Nawalapitiya', 'province_id' => 1],
            ['id' => 28, 'name' => 'Negombo', 'province_id' => 9],
            ['id' => 29, 'name' => 'Nuwara Eliya', 'province_id' => 1],
            ['id' => 30, 'name' => 'Panadura/Horana', 'province_id' => 9],
            ['id' => 31, 'name' => 'Point Pedro', 'province_id' => 5],
            ['id' => 32, 'name' => 'Polonnaruwa', 'province_id' => 3],
            ['id' => 33, 'name' => 'Puttalama', 'province_id' => 4],
            ['id' => 34, 'name' => 'Ratnapura', 'province_id' => 6],
            ['id' => 35, 'name' => 'Trincomalee', 'province_id' => 2],
            ['id' => 36, 'name' => 'Vavuniya', 'province_id' => 5],
            ['id' => 37, 'name' => 'Wattala/Ja Ela', 'province_id' => 9],
            ['id' => 38, 'name' => 'Wennappuwa', 'province_id' => 4],
        ];

        foreach ($districts as $district) {
            District::updateOrCreate(
                ['id' => $district['id']],
                [
                    'name' => $district['name'],
                    'province_id' => $district['province_id'],
                ]
            );
        }
    }
}
