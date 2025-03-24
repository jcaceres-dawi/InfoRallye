<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers = [
            ['first_name' => 'José Antonio', 'last_name' => 'Suárez', 'racing_team_id' => 1],
            ['first_name' => 'Iván', 'last_name' => 'Ares', 'racing_team_id' => 2],
            ['first_name' => 'Surhayen', 'last_name' => 'Pernía', 'racing_team_id' => 3],
            ['first_name' => 'Efrén', 'last_name' => 'Llarena', 'racing_team_id' => 4],
            ['first_name' => 'Óscar', 'last_name' => 'Palomo', 'racing_team_id' => 5],
            ['first_name' => 'Alejandro', 'last_name' => 'Cachón', 'racing_team_id' => 6],
            ['first_name' => 'Jan', 'last_name' => 'Solans', 'racing_team_id' => 7],
            ['first_name' => 'Diego', 'last_name' => 'Ruiloba', 'racing_team_id' => 8],
            ['first_name' => 'Francisco', 'last_name' => 'López', 'racing_team_id' => 9],
            ['first_name' => 'Joan', 'last_name' => 'Vinyes', 'racing_team_id' => 10],
        ];

        foreach ($drivers as $driver) {
            Driver::create($driver);
        }
    }
}
