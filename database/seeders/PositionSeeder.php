<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    public function run(): void
    {
        $positions = [
            ['type' => 'National', 'position_code' => 'N01', 'position_name' => 'CHIEF COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N02', 'position_name' => 'DEPUTY CHIEF COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N03', 'position_name' => 'NATIONAL TRAINING  COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N04', 'position_name' => 'NATIONAL PROGRAMME COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N05', 'position_name' => 'INTERNATIONAL COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N06', 'position_name' => 'ASSISSTANT CHIEF COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N07', 'position_name' => 'SPECIAL COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N08', 'position_name' => 'HEADQUARTERS COMMISSIONER'],
            ['type' => 'National', 'position_code' => 'N09', 'position_name' => 'ASST. HEADQUARTERS COMMISSIONER'],

            ['type' => 'District', 'position_code' => 'D01', 'position_name' => 'DISTRICT COMMISSIONER'],
            ['type' => 'District', 'position_code' => 'D02', 'position_name' => 'DEPUTY DISTRICT COMMISSIONER'],
            ['type' => 'District', 'position_code' => 'D03', 'position_name' => 'ASST. DISRTICT COMMISSIONER-ADMIN'],
            ['type' => 'District', 'position_code' => 'D04', 'position_name' => 'ASST. DISRTICT COMMISSIONER-TRAINING'],
            ['type' => 'District', 'position_code' => 'D05', 'position_name' => 'ASST. DISRTICT COMMISSIONER-PROGRAMS'],
            ['type' => 'District', 'position_code' => 'D06', 'position_name' => 'ASST. DISRTICT COMMISSIONER-AREA'],
            ['type' => 'District', 'position_code' => 'D07', 'position_name' => 'ASST. DISRTICT COMMISSIONER-IT/MEDIA'],
            ['type' => 'District', 'position_code' => 'D08', 'position_name' => 'ASST. DISRTICT COMMISSIONER-SINGITHI'],
            ['type' => 'District', 'position_code' => 'D09', 'position_name' => 'ASST. DISRTICT COMMISSIONER-CUBS'],
            ['type' => 'District', 'position_code' => 'D10', 'position_name' => 'ASST. DISRTICT COMMISSIONER-SCOUTS'],
            ['type' => 'District', 'position_code' => 'D11', 'position_name' => 'ASST. DISRTICT COMMISSIONER-ROVERS'],
            ['type' => 'District', 'position_code' => 'D12', 'position_name' => 'ASST. DISRTICT COMMISSIONER'],
            ['type' => 'District', 'position_code' => 'D13', 'position_name' => 'DISTRICT SCOUT MASTER-SINGITHI'],
            ['type' => 'District', 'position_code' => 'D14', 'position_name' => 'DISTRICT SCOUT MASTER-CUBS'],
            ['type' => 'District', 'position_code' => 'D15', 'position_name' => 'DISTRICT SCOUT MASTER-SCOUTS'],
            ['type' => 'District', 'position_code' => 'D16', 'position_name' => 'DISTRICT SCOUT MASTER-ROVERS'],
            ['type' => 'District', 'position_code' => 'D17', 'position_name' => 'DISTRICT SCOUT MASTER'],
            ['type' => 'District', 'position_code' => 'D18', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-SINGITHI'],
            ['type' => 'District', 'position_code' => 'D19', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-CUBS'],
            ['type' => 'District', 'position_code' => 'D20', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-SCOUTS'],
            ['type' => 'District', 'position_code' => 'D21', 'position_name' => 'ASST.DISTRICT SCOUT MASTER-ROVERS'],
            ['type' => 'District', 'position_code' => 'D22', 'position_name' => 'ASST.DISTRICT SCOUT MASTER'],

            ['type' => 'Group', 'position_code' => 'G01', 'position_name' => 'GROUP SCOUT MASTER'],
            ['type' => 'Group', 'position_code' => 'G02', 'position_name' => 'SCOUT MASTER-SINGITHI'],
            ['type' => 'Group', 'position_code' => 'G03', 'position_name' => 'SCOUT MASTER-CUBS'],
            ['type' => 'Group', 'position_code' => 'G04', 'position_name' => 'SCOUT MASTER-SCOUTS'],
            ['type' => 'Group', 'position_code' => 'G05', 'position_name' => 'SCOUT MASTER-ROVERS'],
            ['type' => 'Group', 'position_code' => 'G06', 'position_name' => 'SCOUT MASTER'],
            ['type' => 'Group', 'position_code' => 'G07', 'position_name' => 'ASST. SCOUT MASTER-SINGITHI'],
            ['type' => 'Group', 'position_code' => 'G08', 'position_name' => 'ASST. SCOUT MASTER-CUBS'],
            ['type' => 'Group', 'position_code' => 'G09', 'position_name' => 'ASST. SCOUT MASTER-SCOUTS'],
            ['type' => 'Group', 'position_code' => 'G10', 'position_name' => 'ASST. SCOUT MASTER-ROVERS'],
            ['type' => 'Group', 'position_code' => 'G11', 'position_name' => 'ASST. SCOUT MASTER'],
            ['type' => 'Group', 'position_code' => 'G12', 'position_name' => 'LETTER OF AUTHORITY'],
            ['type' => 'Group', 'position_code' => 'G13', 'position_name' => 'INSTRUCTOR'],

            ['type' => 'Lay-position', 'position_code' => 'L01', 'position_name' => 'PATRON'],
            ['type' => 'Lay-position', 'position_code' => 'L02', 'position_name' => 'VICE PATRON'],
            ['type' => 'Lay-position', 'position_code' => 'L03', 'position_name' => 'PRESIDENT'],
            ['type' => 'Lay-position', 'position_code' => 'L04', 'position_name' => 'VICE PRESIDENT'],
            ['type' => 'Lay-position', 'position_code' => 'L05', 'position_name' => 'CHAIRMAN-EXCO'],
            ['type' => 'Lay-position', 'position_code' => 'L06', 'position_name' => 'VICE CHAIRMAN-EXCO'],
            ['type' => 'Lay-position', 'position_code' => 'L07', 'position_name' => 'SECRETARY'],
            ['type' => 'Lay-position', 'position_code' => 'L08', 'position_name' => 'ASST.SECRETARY'],
            ['type' => 'Lay-position', 'position_code' => 'L09', 'position_name' => 'TREASURER'],
            ['type' => 'Lay-position', 'position_code' => 'L10', 'position_name' => 'ASST.TREASURER'],
            ['type' => 'Lay-position', 'position_code' => 'L11', 'position_name' => 'AUDITOR'],
            ['type' => 'Lay-position', 'position_code' => 'L12', 'position_name' => 'EXECUTIVE COMMITTEE MEMBER'],
            ['type' => 'Lay-position', 'position_code' => 'L13', 'position_name' => 'SCOUT COUNCIL MEMBER'],
            ['type' => 'Lay-position', 'position_code' => 'L14', 'position_name' => 'LOCAL ASSOCIATION MEMBER'],
            ['type' => 'Lay-position', 'position_code' => 'L15', 'position_name' => 'LIFE MEMBER'],
            ['type' => 'Lay-position', 'position_code' => 'L16', 'position_name' => 'BADGE EXAMINER'],

            ['type' => 'Staff-Position', 'position_code' => 'S01', 'position_name' => 'EXECUTIVE SECRETARY'],
            ['type' => 'Staff-Position', 'position_code' => 'S02', 'position_name' => 'MANAGER'],
            ['type' => 'Staff-Position', 'position_code' => 'S03', 'position_name' => 'ASST.MANAGER'],
            ['type' => 'Staff-Position', 'position_code' => 'S04', 'position_name' => 'SUPERVISORY'],
            ['type' => 'Staff-Position', 'position_code' => 'S05', 'position_name' => 'ACCOUNTS CLERK'],
            ['type' => 'Staff-Position', 'position_code' => 'S06', 'position_name' => 'CLERICAL'],
            ['type' => 'Staff-Position', 'position_code' => 'S07', 'position_name' => 'CASHIER'],
            ['type' => 'Staff-Position', 'position_code' => 'S08', 'position_name' => 'CARETAKER'],
            ['type' => 'Staff-Position', 'position_code' => 'S09', 'position_name' => 'OFFICE ASSISTANT'],
            ['type' => 'Staff-Position', 'position_code' => 'S10', 'position_name' => 'WATCHER'],
        ];

        foreach ($positions as $position) {
            Position::updateOrCreate(
                ['position_code' => $position['position_code']],
                [
                    'type' => $position['type'],
                    'position_name' => $position['position_name'],
                ]
            );
        }
    }
}
