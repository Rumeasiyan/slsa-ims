<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlStreamSeeder extends Seeder
{
    public function run(): void
    {
        $streams = [
            'Physical Science Stream',
            'Biological Science Stream',
            'Commerce Stream',
            'Arts Stream',
            'Technology Stream',
        ];

        foreach ($streams as $stream) {
            DB::table('al_streams')->insert([
                'stream_name' => $stream,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
