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
            ['first_name' => 'José Antonio', 'last_name' => 'Suárez', 'racing_team_id' => 1], // S-CER
            ['first_name' => 'Iván', 'last_name' => 'Ares', 'racing_team_id' => 2], // CERA Recalvi
            ['first_name' => 'Surhayen', 'last_name' => 'Pernía', 'racing_team_id' => 3], // CERT Rallycar
            ['first_name' => 'Efrén', 'last_name' => 'Llarena', 'racing_team_id' => 4], // CERT Rallycar
            ['first_name' => 'Óscar', 'last_name' => 'Palomo', 'racing_team_id' => 5], // S-CER
            ['first_name' => 'Alejandro', 'last_name' => 'Cachón', 'racing_team_id' => 6], // CERA Recalvi
            ['first_name' => 'José Luis', 'last_name' => 'Peláez', 'racing_team_id' => 7], // CERT Rallycar
            ['first_name' => 'Carlos', 'last_name' => 'Martínez', 'racing_team_id' => 8], // CERTT GT2i
            ['first_name' => 'Javier', 'last_name' => 'Pardo', 'racing_team_id' => 9], // S-CER
            ['first_name' => 'Jorge', 'last_name' => 'García', 'racing_team_id' => 10], // CERA Recalvi
            ['first_name' => 'Luis', 'last_name' => 'Recuenco', 'racing_team_id' => 11], // S-CER
            ['first_name' => 'Diego', 'last_name' => 'Sánchez', 'racing_team_id' => 12], // CERA Recalvi
            ['first_name' => 'Carlos', 'last_name' => 'Barroso', 'racing_team_id' => 13], // CERT Rallycar
            ['first_name' => 'Eduardo', 'last_name' => 'Hernández', 'racing_team_id' => 14], // CERT Rallycar
            ['first_name' => 'Antonio', 'last_name' => 'Del Barrio', 'racing_team_id' => 15], // S-CER
            ['first_name' => 'David', 'last_name' => 'González', 'racing_team_id' => 16], // CERA Recalvi
            ['first_name' => 'Carlos', 'last_name' => 'León', 'racing_team_id' => 17], // CERT Rallycar
            ['first_name' => 'Ángel', 'last_name' => 'Sánchez', 'racing_team_id' => 18], // CERTT GT2i
        ];

        foreach ($drivers as $driver) {
            Driver::create($driver);
        }
    }
}
