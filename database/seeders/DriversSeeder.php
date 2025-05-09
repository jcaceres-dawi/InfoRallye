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
            ['first_name' => 'José Luis', 'last_name' => 'Peláez', 'racing_team_id' => 7],
            ['first_name' => 'Carlos', 'last_name' => 'Martínez', 'racing_team_id' => 8],
            ['first_name' => 'Javier', 'last_name' => 'Pardo', 'racing_team_id' => 9],
            ['first_name' => 'Jorge', 'last_name' => 'García', 'racing_team_id' => 10],
            ['first_name' => 'Luis', 'last_name' => 'Recuenco', 'racing_team_id' => 11],
            ['first_name' => 'Diego', 'last_name' => 'Sánchez', 'racing_team_id' => 12],
            ['first_name' => 'Carlos', 'last_name' => 'Barroso', 'racing_team_id' => 13],
            ['first_name' => 'Eduardo', 'last_name' => 'Hernández', 'racing_team_id' => 14],
            ['first_name' => 'Antonio', 'last_name' => 'Del Barrio', 'racing_team_id' => 15],
            ['first_name' => 'David', 'last_name' => 'González', 'racing_team_id' => 16],
            ['first_name' => 'Carlos', 'last_name' => 'León', 'racing_team_id' => 17],
            ['first_name' => 'Ángel', 'last_name' => 'Sánchez', 'racing_team_id' => 18],
            ['first_name' => 'Marc', 'last_name' => 'Esparza', 'racing_team_id' => 19],
            ['first_name' => 'Rubén', 'last_name' => 'Castro', 'racing_team_id' => 20],
            ['first_name' => 'Fernando', 'last_name' => 'López', 'racing_team_id' => 21],
            ['first_name' => 'Alberto', 'last_name' => 'Núñez', 'racing_team_id' => 22],
            ['first_name' => 'Miguel', 'last_name' => 'Rosales', 'racing_team_id' => 23],
            ['first_name' => 'Andrés', 'last_name' => 'Salas', 'racing_team_id' => 24],
            ['first_name' => 'Raúl', 'last_name' => 'Delgado', 'racing_team_id' => 25],
            ['first_name' => 'Víctor', 'last_name' => 'Souto', 'racing_team_id' => 26],
            ['first_name' => 'Jaime', 'last_name' => 'Valdés', 'racing_team_id' => 27],
            ['first_name' => 'Sergio', 'last_name' => 'Ortiz', 'racing_team_id' => 28],
            ['first_name' => 'Dani', 'last_name' => 'Domínguez', 'racing_team_id' => 29],
            ['first_name' => 'Adrián', 'last_name' => 'Carrillo', 'racing_team_id' => 30],
        ];

        foreach ($drivers as $driver) {
            Driver::create($driver);
        }
    }
}
