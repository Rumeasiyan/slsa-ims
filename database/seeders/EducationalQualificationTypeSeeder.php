<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EducationalQualificationTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            'School student - GCE Ordinary Level',
            'School student - Advanced Level',
            'Certificate',
            'Diploma',
            'Higher Diploma',
            'Bachelor\'s Degree',
            'Bachelor\'s Honours Degree',
            'Postgraduate Diploma / Master\'s Degree',
            'Master\'s Degree',
            'Doctoral Degree',
        ];

        foreach ($types as $type) {
            DB::table('educational_qualification_types')->insert([
                'type_name' => $type,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
