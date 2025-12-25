<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    public function run(): void
    {
        $provinces = [
            ['id' => 1, 'name' => 'Central Province'],
            ['id' => 2, 'name' => 'Eastern Province'],
            ['id' => 3, 'name' => 'North Central Province'],
            ['id' => 4, 'name' => 'North Western Province'],
            ['id' => 5, 'name' => 'Northern Province'],
            ['id' => 6, 'name' => 'Sabaragamuwa Province'],
            ['id' => 7, 'name' => 'Southern Province'],
            ['id' => 8, 'name' => 'Uva Province'],
            ['id' => 9, 'name' => 'Western Province'],
        ];

        foreach ($provinces as $province) {
            Province::updateOrCreate(
                ['id' => $province['id']],
                ['name' => $province['name']]
            );
        }
    }
}
