<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(
            [
                CategoriesSeeder::class,
                RacingTeamsSeeder::class,
                DriversSeeder::class,
                CoDriversSeeder::class,
                RalliesSeeder::class,
                StagesSeeder::class,
                TeamsSeeder::class,
                RankingsSeeder::class,
                StageResultsSeeder::class,
                TeamRallySeeder::class,
            ]
        );
    }
}
