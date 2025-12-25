<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            ['name' => 'Singithi', 'age' => '5-7 years'],
            ['name' => 'Cub', 'age' => '7-11 years'],
            ['name' => 'Junior Scout', 'age' => '11-14 years'],
            ['name' => 'Senior Scout', 'age' => '14-17 years'],
            ['name' => 'Rover', 'age' => '17-26 years'],
            ['name' => 'Scout Master', 'age' => ' '],
        ];

        foreach ($sections as $section) {
            Section::firstOrCreate(
                ['name' => $section['name']],
                ['age' => $section['age']]
            );
        }
    }
}
