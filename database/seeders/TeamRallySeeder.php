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
        $teams = Team::all();

        foreach ($teams as $team) {
            $racingTeam = $team->racingTeam;
            $category = $racingTeam->category;
            $rallies = Rally::where('category_id', $category->id)->get();

            foreach ($rallies as $rally) {
                $team->rallies()->attach($rally->id);
            }
        }
    }
}
