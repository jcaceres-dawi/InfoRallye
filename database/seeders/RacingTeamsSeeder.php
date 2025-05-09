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
            ['name' => 'Hyundai España', 'category_id' => 1],
            ['name' => 'Citroën España', 'category_id' => 2],
            ['name' => 'Peugeot Sport', 'category_id' => 3],
            ['name' => 'Ford España', 'category_id' => 3],
            ['name' => 'Toyota Gazoo Racing Spain', 'category_id' => 1],
            ['name' => 'M-Sport', 'category_id' => 2],
            ['name' => 'Skoda Motorsport', 'category_id' => 3],
            ['name' => 'Repsol Rally Team', 'category_id' => 4],
            ['name' => 'Grupo A Competición', 'category_id' => 1],
            ['name' => 'MC Racing', 'category_id' => 2],
            ['name' => 'C.D. Auto Gomas', 'category_id' => 1],
            ['name' => 'Nupel Global Racing', 'category_id' => 2],
            ['name' => 'La Base Motor Club', 'category_id' => 3],
            ['name' => 'ProRally Team', 'category_id' => 4],
            ['name' => 'Escudería Ourense', 'category_id' => 1],
            ['name' => 'Escudería Rías Baixas', 'category_id' => 2],
            ['name' => 'C.D. Vallejo Racing', 'category_id' => 3],
            ['name' => 'Red Camel Rally Team', 'category_id' => 4],
            ['name' => 'Extreme Rally Team', 'category_id' => 4],
            ['name' => 'Andinas Racing', 'category_id' => 1],
        ];


        foreach ($teams as $team) {
            RacingTeam::create([
                'name' => $team['name'],
                'category_id' => $team['category_id'],
            ]);
        }
    }
}
