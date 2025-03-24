<?php

namespace Database\Seeders;

use App\Models\CoDriver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoDriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coDrivers = [
            ['first_name' => 'Alberto', 'last_name' => 'Iglesias', 'racing_team_id' => 1],
            ['first_name' => 'David', 'last_name' => 'Vázquez', 'racing_team_id' => 2],
            ['first_name' => 'Eduardo', 'last_name' => 'González', 'racing_team_id' => 3],
            ['first_name' => 'Sara', 'last_name' => 'Fernández', 'racing_team_id' => 4],
            ['first_name' => 'Rodrigo', 'last_name' => 'Sanjuán', 'racing_team_id' => 5],
            ['first_name' => 'Borja', 'last_name' => 'Rozada', 'racing_team_id' => 6],
            ['first_name' => 'Xavier', 'last_name' => 'Amigo', 'racing_team_id' => 7],
            ['first_name' => 'Ángel', 'last_name' => 'Vela', 'racing_team_id' => 8],
            ['first_name' => 'Borja', 'last_name' => 'Odriozola', 'racing_team_id' => 9],
            ['first_name' => 'Jordi', 'last_name' => 'Mercader', 'racing_team_id' => 10],
        ];

        foreach ($coDrivers as $coDriver) {
            CoDriver::create($coDriver);
        }
    }
}
