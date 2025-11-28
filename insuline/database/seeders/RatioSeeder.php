<?php

namespace Database\Seeders;

use App\Models\Ratio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RatioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ratio::insert([
            ['food_type' => 'desayuno', 'ratio' => 15],
            ['food_type' => 'almuerzo', 'ratio' => 12],
            ['food_type' => 'cena', 'ratio' => 15]
        ]);
    }
}
