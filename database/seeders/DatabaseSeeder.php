<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            DesignationSeeder::class,
            MemberCategorySeeder::class,
            PositionLevelSeeder::class,
            PositionSeeder::class,
        ]);

        $adminRole = Role::where('name', 'ADMIN SUPERVISOR')->first();
        $staffRole = Role::where('name', 'STAFF')->first();
        $memberRole = Role::where('name', 'MEMBER')->first();
        $district = DB::table('districts')->first();

        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin User',
                'password' => 'password',
                'email_verified_at' => now(),
                'role_id' => $adminRole?->id,
                'district_id' => $district?->id,
                'full_name' => 'Admin User',
                'nic_no' => '123456789A',
            ]
        );

        User::firstOrCreate(
            ['email' => 'staff@example.com'],
            [
                'name' => 'Staff User',
                'password' => 'password',
                'email_verified_at' => now(),
                'role_id' => $staffRole?->id,
                'district_id' => $district?->id,
                'full_name' => 'Staff User',
                'nic_no' => '123456789S',
            ]
        );

        User::firstOrCreate(
            ['email' => 'member@example.com'],
            [
                'name' => 'Member User',
                'password' => 'password',
                'email_verified_at' => now(),
                'role_id' => $memberRole?->id,
                'district_id' => $district?->id,
                'full_name' => 'Member User',
                'nic_no' => '123456789M',
            ]
        );
    }
}
