<?php

namespace Database\Seeders;

use App\Models\Muscle;
use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MuscleSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Array of muscle names to insert
        $muscles = [
            'Biceps',
            'Triceps',
            'Quadriceps',
            'Hamstrings',
            'Deltoids',
            'Pectorals',
            'Glutes',
            'Abdominals',
            'Calves',
            'Lats',
            'Chest'
        ];

        // Insert each muscle name using the Eloquent model
        foreach ($muscles as $muscleName) {
            Muscle::create(['name' => $muscleName]);
        }
    }
}
