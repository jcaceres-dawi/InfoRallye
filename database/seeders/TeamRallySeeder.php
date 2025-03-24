<?php

namespace Database\Seeders;

use App\Models\Rally;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamRallySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener todos los equipos
        $teams = Team::all();

        // Iterar sobre cada equipo
        foreach ($teams as $team) {
            // Obtener el RacingTeam al que pertenece el equipo
            $racingTeam = $team->racingTeam;

            // Obtener la categoría del RacingTeam
            $category = $racingTeam->category;

            // Obtener todos los rallies de esa categoría
            $rallies = Rally::where('category_id', $category->id)->get();

            // Relacionar el equipo con todos los rallies de esa categoría
            foreach ($rallies as $rally) {
                $team->rallies()->attach($rally->id);
            }
        }
    }
}
