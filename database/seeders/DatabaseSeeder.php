<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(RoleSeeder::class);

        $admin = User::firstOrCreate(
            ['email' => 'admin@slsa.lk'],
            [
                'name' => 'Admin User',
                'password' => 'password',
                'email_verified_at' => now(),
            ]
        );

        $adminRole = \Spatie\Permission\Models\Role::where('name', 'ADMIN')->first();
        if ($adminRole && ! $admin->hasRole('ADMIN')) {
            $admin->assignRole($adminRole);
        }

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'password' => 'password',
                'email_verified_at' => now(),
            ]
        );

        $this->call(ProvinceSeeder::class);
        $this->call(DistrictSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(PositionSeeder::class);
    }
}
