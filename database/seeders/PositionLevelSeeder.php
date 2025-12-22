<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionLevelSeeder extends Seeder
{
    public function run(): void
    {
        $uniformedMembersId = DB::table('member_categories')
            ->where('category_name', 'Uniformed Members')
            ->value('id');

        $layMembersId = DB::table('member_categories')
            ->where('category_name', 'Lay Members')
            ->value('id');

        $staffMembersId = DB::table('member_categories')
            ->where('category_name', 'Staff Members')
            ->value('id');

        $levels = [
            ['member_category_id' => $uniformedMembersId, 'level_name' => 'National Positions'],
            ['member_category_id' => $uniformedMembersId, 'level_name' => 'District Positions'],
            ['member_category_id' => $uniformedMembersId, 'level_name' => 'Group Positions'],
            ['member_category_id' => $layMembersId, 'level_name' => 'Lay Members'],
            ['member_category_id' => $staffMembersId, 'level_name' => 'Staff Members'],
        ];

        foreach ($levels as $level) {
            DB::table('position_levels')->insert([
                'member_category_id' => $level['member_category_id'],
                'level_name' => $level['level_name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
