<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
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

        $nationalLevelId = DB::table('position_levels')
            ->where('level_name', 'National Positions')
            ->value('id');

        $districtLevelId = DB::table('position_levels')
            ->where('level_name', 'District Positions')
            ->value('id');

        $groupLevelId = DB::table('position_levels')
            ->where('level_name', 'Group Positions')
            ->value('id');

        $layMembersLevelId = DB::table('position_levels')
            ->where('level_name', 'Lay Members')
            ->value('id');

        $staffMembersLevelId = DB::table('position_levels')
            ->where('level_name', 'Staff Members')
            ->value('id');

        $positions = [
            // National Positions (Uniformed Members)
            ['position_code' => 'N01', 'position_name' => 'CHIEF COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N02', 'position_name' => 'DEPUTY CHIEF COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N03', 'position_name' => 'NATIONAL TRAINING  COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N04', 'position_name' => 'NATIONAL PROGRAMME COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N05', 'position_name' => 'INTERNATIONAL COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N06', 'position_name' => 'ASSISSTANT CHIEF COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N07', 'position_name' => 'SPECIAL COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N08', 'position_name' => 'HEADQUARTERS COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'N09', 'position_name' => 'ASST. HEADQUARTERS COMMISSIONER', 'position_level_id' => $nationalLevelId, 'member_category_id' => $uniformedMembersId],

            // District Positions (Uniformed Members)
            ['position_code' => 'D01', 'position_name' => 'DISTRICT COMMISSIONER', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D02', 'position_name' => 'DEPUTY DISTRICT COMMISSIONER', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D03', 'position_name' => 'ASST. DISRTICT COMMISSIONER-ADMIN', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D04', 'position_name' => 'ASST. DISRTICT COMMISSIONER-TRAINING', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D05', 'position_name' => 'ASST. DISRTICT COMMISSIONER-PROGRAMS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D06', 'position_name' => 'ASST. DISRTICT COMMISSIONER-AREA', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D07', 'position_name' => 'ASST. DISRTICT COMMISSIONER-IT/MEDIA', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D08', 'position_name' => 'ASST. DISRTICT COMMISSIONER-SINGITHI', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D09', 'position_name' => 'ASST. DISRTICT COMMISSIONER-CUBS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D10', 'position_name' => 'ASST. DISRTICT COMMISSIONER-SCOUTS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D11', 'position_name' => 'ASST. DISRTICT COMMISSIONER-ROVERS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D12', 'position_name' => 'ASST. DISRTICT COMMISSIONER', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D13', 'position_name' => 'DISTRICT SCOUT MASTER-SINGITHI', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D14', 'position_name' => 'DISTRICT SCOUT MASTER-CUBS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D15', 'position_name' => 'DISTRICT SCOUT MASTER-SCOUTS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D16', 'position_name' => 'DISTRICT SCOUT MASTER-ROVERS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D17', 'position_name' => 'DISTRICT SCOUT MASTER', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D18', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-SINGITHI', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D19', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-CUBS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D20', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-SCOUTS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D21', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-ROVERS', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'D22', 'position_name' => 'ASST.DISTRICT SCOUT MASTER', 'position_level_id' => $districtLevelId, 'member_category_id' => $uniformedMembersId],

            // Group Positions (Uniformed Members)
            ['position_code' => 'G01', 'position_name' => 'GROUP SCOUT MASTER', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G02', 'position_name' => 'SCOUT MASTER-SINGITHI', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G03', 'position_name' => 'SCOUT MASTER-CUBS', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G04', 'position_name' => 'SCOUT MASTER-SCOUTS', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G05', 'position_name' => 'SCOUT MASTER-ROVERS', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G06', 'position_name' => 'SCOUT MASTER', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G07', 'position_name' => 'ASST. SCOUT MASTER-SINGITHI', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G08', 'position_name' => 'ASST. SCOUT MASTER-CUBS', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G09', 'position_name' => 'ASST. SCOUT MASTER-SCOUTS', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G10', 'position_name' => 'ASST. SCOUT MASTER-ROVERS', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G11', 'position_name' => 'ASST. SCOUT MASTER', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G12', 'position_name' => 'LETTER OF AUTHORITY', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],
            ['position_code' => 'G13', 'position_name' => 'INSTRUCTOR', 'position_level_id' => $groupLevelId, 'member_category_id' => $uniformedMembersId],

            // Lay Members
            ['position_code' => 'L01', 'position_name' => 'PATRON', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L02', 'position_name' => 'VICE PATRON', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L03', 'position_name' => 'PRESIDENT', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L04', 'position_name' => 'VICE PRESIDENT', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L05', 'position_name' => 'CHAIRMAN-EXCO', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L06', 'position_name' => 'VICE CHAIRMAN-EXCO', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L07', 'position_name' => 'SECRETARY', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L08', 'position_name' => 'ASST.SECRETARY', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L09', 'position_name' => 'TREASURER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L10', 'position_name' => 'ASST.TREASURER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L11', 'position_name' => 'AUDITOR', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L12', 'position_name' => 'EXECUTIVE COMMITTEE MEMBER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L13', 'position_name' => 'SCOUT COUNCIL MEMBER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L14', 'position_name' => 'LOCAL ASSOCIATION MEMBER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L15', 'position_name' => 'LIFE MEMBER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],
            ['position_code' => 'L16', 'position_name' => 'BADGE EXAMINER', 'position_level_id' => $layMembersLevelId, 'member_category_id' => $layMembersId],

            // Staff Members
            ['position_code' => 'S01', 'position_name' => 'EXECUTIVE SECRETARY', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S02', 'position_name' => 'MANAGER', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S03', 'position_name' => 'ASST.MANAGER', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S04', 'position_name' => 'SUPERVISORY', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S05', 'position_name' => 'ACCOUNTS CLERK', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S06', 'position_name' => 'CLERICAL', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S07', 'position_name' => 'CASHIER', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S08', 'position_name' => 'CARETAKER', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S09', 'position_name' => 'OFFICE ASSISTANT', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
            ['position_code' => 'S10', 'position_name' => 'WATCHER', 'position_level_id' => $staffMembersLevelId, 'member_category_id' => $staffMembersId],
        ];

        foreach ($positions as $position) {
            DB::table('positions')->insert([
                'position_code' => $position['position_code'],
                'position_name' => $position['position_name'],
                'position_level_id' => $position['position_level_id'],
                'member_category_id' => $position['member_category_id'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
