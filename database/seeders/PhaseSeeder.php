<?php

namespace Database\Seeders;

use App\Models\Phase;
use Illuminate\Database\Seeder;

class PhaseSeeder extends Seeder
{
    public function run(): void
    {
        $phasesData = [
            ['name' => 'Phase I - Introductory Course', 'code' => 'PHASE_I_INTRO', 'order' => 1],
            ['name' => 'Phase I - Conference', 'code' => 'PHASE_I_CONF', 'order' => 2],
            ['name' => 'Phase II - Pre Course', 'code' => 'PHASE_II_PRE', 'order' => 3],
            ['name' => 'Phase II - Residential Training', 'code' => 'PHASE_II_RES', 'order' => 4],
            ['name' => 'Phase III - In Service', 'code' => 'PHASE_III', 'order' => 5],
            ['name' => 'Phase IV - Advanced Course', 'code' => 'PHASE_IV', 'order' => 6],
            ['name' => 'Phase V - In Service', 'code' => 'PHASE_V', 'order' => 7],
        ];

        foreach ($phasesData as $phaseData) {
            Phase::firstOrCreate(
                ['code' => $phaseData['code']],
                $phaseData
            );
        }
    }
}
