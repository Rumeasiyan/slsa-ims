<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DesignationSeeder extends Seeder
{
    public function run(): void
    {
        $designations = [
            'CHIEF COMMISSIONER',
            'DEPUTY CHIEF COMMISSIONER',
            'NATIONAL TRAINING  COMMISSIONER',
            'NATIONAL PROGRAMME COMMISSIONER',
            'INTERNATIONAL COMMISSIONER',
            'ASSISSTANT CHIEF COMMISSIONER',
            'HEADQUARTERS COMMISSIONER',
            'SPECIAL COMMISSIONER',
            'DISTRICT COMMISSIONER',
            'ASSISSTANT DISRTICT COMMISSIONER',
            'DISTRICT  SCOUT MASTER',
            'LT',
            'CLT',
            'ALT',
            'CALT',
            'WOOD BADGE ROVER',
            'WOOD BADGE SCOUT',
            'WOOD BADGE SINHITHTHI',
            'WOOD BADGE CUBS COUT MASTER',
            'GROUP LEADER',
            'SCOUT STUDENT',
        ];

        foreach ($designations as $designation) {
            DB::table('designations')->insert([
                'name' => $designation,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
