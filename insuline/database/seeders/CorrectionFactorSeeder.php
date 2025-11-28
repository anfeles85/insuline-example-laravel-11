<?php

namespace Database\Seeders;

use App\Models\CorrectionFactor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorrectionFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CorrectionFactor::insert([
            ['glycemia_min' => 70, 'glycemia_max' => 100, 'fc' => -1],
            ['glycemia_min' => 140, 'glycemia_max' => 200, 'fc' => 2],
            ['glycemia_min' => 200, 'glycemia_max' => 250, 'fc' => 3],
            ['glycemia_min' => 250, 'glycemia_max' => null, 'fc' => 4]
        ]);
    }
}
