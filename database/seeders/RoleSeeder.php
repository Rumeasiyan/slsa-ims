<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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

        foreach ($roles as $roleName) {
            Role::firstOrCreate(['name' => $roleName, 'guard_name' => 'web']);
        }
    }
}
