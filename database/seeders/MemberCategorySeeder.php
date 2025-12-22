<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Uniformed Members',
            'Lay Members',
            'Staff Members',
        ];

        foreach ($categories as $category) {
            DB::table('member_categories')->insert([
                'category_name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
