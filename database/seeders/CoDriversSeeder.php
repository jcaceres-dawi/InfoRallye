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
            ['first_name' => 'Cándido', 'last_name' => 'Carrera', 'racing_team_id' => 1],
            ['first_name' => 'José', 'last_name' => 'Ramón', 'racing_team_id' => 2],
            ['first_name' => 'David', 'last_name' => 'Vázquez', 'racing_team_id' => 3],
            ['first_name' => 'Samuel', 'last_name' => 'Suárez', 'racing_team_id' => 4],
            ['first_name' => 'Javier', 'last_name' => 'Mujica', 'racing_team_id' => 5],
            ['first_name' => 'Adrián', 'last_name' => 'García', 'racing_team_id' => 6],
            ['first_name' => 'Jaime', 'last_name' => 'Delgado', 'racing_team_id' => 7],
            ['first_name' => 'Raúl', 'last_name' => 'Díaz', 'racing_team_id' => 8],
            ['first_name' => 'Antonio', 'last_name' => 'Gutiérrez', 'racing_team_id' => 9],
            ['first_name' => 'Carlos', 'last_name' => 'Hernández', 'racing_team_id' => 10],
            ['first_name' => 'Fernando', 'last_name' => 'Alonso', 'racing_team_id' => 11],
            ['first_name' => 'Lucía', 'last_name' => 'Pérez', 'racing_team_id' => 12],
            ['first_name' => 'Daniel', 'last_name' => 'González', 'racing_team_id' => 13],
            ['first_name' => 'José Ángel', 'last_name' => 'López', 'racing_team_id' => 14],
            ['first_name' => 'Santiago', 'last_name' => 'Sánchez', 'racing_team_id' => 15],
            ['first_name' => 'Enrique', 'last_name' => 'Sánchez', 'racing_team_id' => 16],
            ['first_name' => 'Cristina', 'last_name' => 'Martín', 'racing_team_id' => 17],
            ['first_name' => 'Laura', 'last_name' => 'Fernández', 'racing_team_id' => 18],
            ['first_name' => 'Elena', 'last_name' => 'Ruiz', 'racing_team_id' => 19],
            ['first_name' => 'Gonzalo', 'last_name' => 'Martínez', 'racing_team_id' => 20],
            ['first_name' => 'Beatriz', 'last_name' => 'López', 'racing_team_id' => 21],
            ['first_name' => 'Ignacio', 'last_name' => 'Serrano', 'racing_team_id' => 22],
            ['first_name' => 'Paula', 'last_name' => 'Castillo', 'racing_team_id' => 23],
            ['first_name' => 'Álvaro', 'last_name' => 'Navarro', 'racing_team_id' => 24],
            ['first_name' => 'Teresa', 'last_name' => 'Rodríguez', 'racing_team_id' => 25],
            ['first_name' => 'Héctor', 'last_name' => 'Moreno', 'racing_team_id' => 26],
            ['first_name' => 'Clara', 'last_name' => 'Santos', 'racing_team_id' => 27],
            ['first_name' => 'Mario', 'last_name' => 'Gil', 'racing_team_id' => 28],
            ['first_name' => 'Eva', 'last_name' => 'Vega', 'racing_team_id' => 29],
            ['first_name' => 'Nuria', 'last_name' => 'Domenech', 'racing_team_id' => 30],
        ];


        foreach ($coDrivers as $coDriver) {
            CoDriver::create($coDriver);
        }
    }
}
