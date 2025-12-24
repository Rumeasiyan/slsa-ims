<?php

namespace Database\Seeders;

use App\Models\Award;
use App\Models\Section;
use Illuminate\Database\Seeder;

class AwardSeeder extends Seeder
{
    public function run(): void
    {
        $sectionMap = [
            'SINGITHI' => 'Singithi',
            'CUB' => 'Cub',
            'SCOUT' => 'Junior Scout',
            'ROVER' => 'Rover',
            'SCOUT MASTER' => 'Scout Master',
        ];

        $awards = [
            ['section' => 'SINGITHI', 'group_code' => 'AWG-SINGITHI SCOUT ACHIEVEMENTS', 'code' => 'AWG01', 'award_name' => 'Singithi Membership Badge', 'category' => 'Youth'],
            ['section' => 'SINGITHI', 'group_code' => 'AWG-SINGITHI SCOUT ACHIEVEMENTS', 'code' => 'AWG02', 'award_name' => 'Sathuta Badge', 'category' => 'Youth'],
            ['section' => 'SINGITHI', 'group_code' => 'AWG-SINGITHI SCOUT ACHIEVEMENTS', 'code' => 'AWG03', 'award_name' => 'Dinuma Badge', 'category' => 'Youth'],
            ['section' => 'CUB', 'group_code' => 'AWC-CUB SCOUT ACHIEVEMENTS', 'code' => 'AWC01', 'award_name' => 'Cub Membership Badge', 'category' => 'Youth'],
            ['section' => 'CUB', 'group_code' => 'AWC-CUB SCOUT ACHIEVEMENTS', 'code' => 'AWC02', 'award_name' => 'Bronze Star', 'category' => 'Youth'],
            ['section' => 'CUB', 'group_code' => 'AWC-CUB SCOUT ACHIEVEMENTS', 'code' => 'AWC03', 'award_name' => 'Silver Star', 'category' => 'Youth'],
            ['section' => 'CUB', 'group_code' => 'AWC-CUB SCOUT ACHIEVEMENTS', 'code' => 'AWC04', 'award_name' => 'Gold Star', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS01', 'award_name' => 'Scout Membership Badge', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS02', 'award_name' => 'S.M.s Award', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS03', 'award_name' => 'G.S.M.\'s Award', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS04', 'award_name' => 'D.C.\'s Award', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS05', 'award_name' => 'C.C.\'s Challenge Award', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS06', 'award_name' => 'Bushman\'s Thong', 'category' => 'Youth'],
            ['section' => 'SCOUT', 'group_code' => 'AWS-SCOUT ACHIEVEMENTS (JNR & SNR)', 'code' => 'AWS07', 'award_name' => 'President\'s Award', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR01', 'award_name' => 'Rover Membership Badge', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR02', 'award_name' => 'Rover Invetiture', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR03', 'award_name' => 'Project Star', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR04', 'award_name' => 'Rambler Star', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR05', 'award_name' => 'Scoutcraft Star', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR06', 'award_name' => 'Leadership Star', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR07', 'award_name' => 'Good Citizen Decoration', 'category' => 'Youth'],
            ['section' => 'ROVER', 'group_code' => 'AWR-ROVER SCOUT ACHIEVEMENTS', 'code' => 'AWR08', 'award_name' => 'Baden Powel Award', 'category' => 'Youth'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM01', 'award_name' => 'Scout Master Membership Badge', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM02', 'award_name' => 'Singithi Phase-1', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM03', 'award_name' => 'Singithi Phase-2', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM04', 'award_name' => 'Singithi Phase-4', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM05', 'award_name' => 'Singithi Wood Badge', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM06', 'award_name' => 'Cub Phase-1', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM07', 'award_name' => 'Cub Phase-2', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM08', 'award_name' => 'Cub Phase-4', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM09', 'award_name' => 'Cub Wood Badge', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM10', 'award_name' => 'Scout Phase-1', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM11', 'award_name' => 'Scout Phase-2', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM12', 'award_name' => 'Scout Phase-4', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM13', 'award_name' => 'Scout Wood Badge', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM14', 'award_name' => 'Rover Phase-1', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM15', 'award_name' => 'Rover Phase-2', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM16', 'award_name' => 'Rover Phase-4', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM17', 'award_name' => 'Rover Wood Badge', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM18', 'award_name' => 'C/FOR ASST. LEADER TRAINER', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM19', 'award_name' => 'ASST. LEADER TRAINER', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM20', 'award_name' => 'C/FOR LEADER TRAINER', 'category' => 'Training'],
            ['section' => 'SCOUT MASTER', 'group_code' => 'AWM-SCOUT MASTER ACHIEVEMENTS', 'code' => 'AWM21', 'award_name' => 'LEADER TRAINER', 'category' => 'Training'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU01', 'award_name' => 'Letter of Commendation', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU02', 'award_name' => 'Certificate of Merit', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU03', 'award_name' => 'Service Medal', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU04', 'award_name' => 'Medal of Merit', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU05', 'award_name' => 'Bar to the Medal of Merit', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU06', 'award_name' => 'Silver Lotus', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU07', 'award_name' => 'Bar to the Silver Lotus', 'category' => 'Adult'],
            ['section' => 'SCOUTER', 'group_code' => 'AWU-ADULT AWARDS', 'code' => 'AWU08', 'award_name' => 'Silver Lion', 'category' => 'Adult'],
            ['section' => 'LAY', 'group_code' => 'AWL-LAY AWARDS', 'code' => 'AWL01', 'award_name' => 'Thanks Badge', 'category' => 'Adult'],
            ['section' => 'LAY', 'group_code' => 'AWL-LAY AWARDS', 'code' => 'AWL02', 'award_name' => 'Thanks Medal', 'category' => 'Adult'],
            ['section' => 'LAY', 'group_code' => 'AWL-LAY AWARDS', 'code' => 'AWL03', 'award_name' => 'Highest Appreciation Medal', 'category' => 'Adult'],
            ['section' => 'LAY', 'group_code' => 'AWL-LAY AWARDS', 'code' => 'AWL04', 'award_name' => 'Thanks Plaque', 'category' => 'Adult'],
        ];

        foreach ($awards as $award) {
            $sectionId = null;
            if (isset($sectionMap[$award['section']])) {
                $section = Section::where('name', $sectionMap[$award['section']])->first();
                $sectionId = $section?->id;
            }

            Award::updateOrCreate(
                ['award_section' => $award['section'], 'code' => $award['code']],
                [
                    'section_id' => $sectionId,
                    'group_code' => $award['group_code'],
                    'award_name' => $award['award_name'],
                    'category' => $award['category'],
                ]
            );
        }
    }
}
