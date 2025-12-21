<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'CHIEF COMMISSIONER',
            'DEPUTY CHIEF COMMISSIONER',
            'NATIONAL TRAINING COMMISSIONER',
            'NATIONAL PROGRAMME COMMISSIONER',
            'INTERNATIONAL COMMISSIONER',
            'ASSISTANT CHIEF COMMISSIONER',
            'HEADQUARTERS COMMISSIONER',
            'SPECIAL COMMISSIONER',
            'DISTRICT COMMISSIONER',
            'ASSISTANT DISTRICT COMMISSIONER',
            'DISTRICT SCOUT MASTER',
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

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'role_name' => $role,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
