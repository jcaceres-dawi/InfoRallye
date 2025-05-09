<?php

namespace Database\Seeders;

use App\Models\Stage;
use App\Models\StageResult;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StageResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $today = Carbon::now();

        $stages = Stage::with('rally.teams')->get();

        foreach ($stages as $stage) {
            $rally = $stage->rally;

            if ($rally->end_date->isBefore($today)) {
                $teams = $rally->teams;

                foreach ($teams as $team) {
                    $exists = StageResult::where('stage_id', $stage->id)
                        ->where('team_id', $team->id)
                        ->exists();

                    if (!$exists) {
                        $randomSeconds = rand(180, 600);

                        StageResult::create([
                            'stage_id' => $stage->id,
                            'team_id' => $team->id,
                            'time' => gmdate('H:i:s', $randomSeconds),
                        ]);
                    }
                }
            }
        }
    }
}
