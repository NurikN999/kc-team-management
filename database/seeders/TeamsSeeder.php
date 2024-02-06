<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['name' => 'Team 1'],
            ['name' => 'Team 2'],
            ['name' => 'Team 3'],
            ['name' => 'Team 4'],
            ['name' => 'Team 5'],
        ];

        foreach ($teams as $team) {
            \App\Models\Team::create($team);
        }
    }
}
