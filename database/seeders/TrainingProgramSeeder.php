<?php

namespace Database\Seeders;

use App\Models\TrainingProgram;
use Illuminate\Database\Seeder;

class TrainingProgramSeeder extends Seeder
{
    public function run(): void
    {
        $programs = [
            ['name' => 'Wood Badge', 'code' => 'WB'],
            ['name' => 'CALT/ALT', 'code' => 'CALT_ALT'],
            ['name' => 'CLT/LT', 'code' => 'CLT_LT'],
        ];

        foreach ($programs as $program) {
            TrainingProgram::firstOrCreate(
                ['code' => $program['code']],
                $program
            );
        }
    }
}
