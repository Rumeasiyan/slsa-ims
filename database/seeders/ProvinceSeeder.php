<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    public function run(): void
    {
        $provinces = [
            ['name' => 'Central Province'],
            ['name' => 'Eastern Province'],
            ['name' => 'North Central Province'],
            ['name' => 'North Western Province'],
            ['name' => 'Northern Province'],
            ['name' => 'Sabaragamuwa Province'],
            ['name' => 'Southern Province'],
            ['name' => 'Uva Province'],
            ['name' => 'Western Province'],
            ['name' => 'NHQ'],
        ];

        foreach ($provinces as $province) {
            DB::table('provinces')->insert([
                'name' => $province['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
