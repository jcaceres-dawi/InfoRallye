<?php

namespace Database\Seeders;

use App\Models\RacingTeam;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RacingTeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [
            ['name' => 'Recalvi Team', 'category_id' => 1],
            ['name' => 'Suzuki Motor Ibérica', 'category_id' => 2],
            ['name' => 'RMC Motorsport', 'category_id' => 3],
            ['name' => 'AR Vidal Racing', 'category_id' => 3],
            ['name' => 'RaceSeven', 'category_id' => 1],
            ['name' => 'Teo Martín Motorsport', 'category_id' => 2],
            ['name' => 'KRS Rallyes', 'category_id' => 3],
            ['name' => 'TH-Trucks Rally Team', 'category_id' => 4],
            ['name' => 'Mavisa Sport', 'category_id' => 1],
            ['name' => 'Escudería Faraón', 'category_id' => 2],
        ];

        foreach ($teams as $team) {
            RacingTeam::create([
                'name' => $team['name'],
                'category_id' => $team['category_id'],
            ]);
        }
    }
}
