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
            ['first_name' => 'Cándido', 'last_name' => 'Carrera', 'racing_team_id' => 1], // Recalvi Team (S-CER)
            ['first_name' => 'José', 'last_name' => 'Ramón', 'racing_team_id' => 2], // Suzuki Motor Ibérica (CERA Recalvi)
            ['first_name' => 'David', 'last_name' => 'Vázquez', 'racing_team_id' => 3], // RMC Motorsport (CERT Rallycar)
            ['first_name' => 'Samuel', 'last_name' => 'Suárez', 'racing_team_id' => 4], // AR Vidal Racing (CERT Rallycar)
            ['first_name' => 'Javier', 'last_name' => 'Mujica', 'racing_team_id' => 5], // RaceSeven (S-CER)
            ['first_name' => 'Adrián', 'last_name' => 'García', 'racing_team_id' => 6], // Teo Martín Motorsport (CERA Recalvi)
            ['first_name' => 'Jaime', 'last_name' => 'Delgado', 'racing_team_id' => 7], // KRS Rallyes (CERT Rallycar)
            ['first_name' => 'Raúl', 'last_name' => 'Díaz', 'racing_team_id' => 8], // TH-Trucks Rally Team (CERTT GT2i)
            ['first_name' => 'Antonio', 'last_name' => 'Gutiérrez', 'racing_team_id' => 9], // Mavisa Sport (S-CER)
            ['first_name' => 'Carlos', 'last_name' => 'Hernández', 'racing_team_id' => 10], // Escudería Faraón (CERA Recalvi)
            ['first_name' => 'Fernando', 'last_name' => 'Alonso', 'racing_team_id' => 11], // Hyundai España (S-CER)
            ['first_name' => 'Lucía', 'last_name' => 'Pérez', 'racing_team_id' => 12], // Citroën España (CERA Recalvi)
            ['first_name' => 'Daniel', 'last_name' => 'González', 'racing_team_id' => 13], // Peugeot Sport (CERT Rallycar)
            ['first_name' => 'José Ángel', 'last_name' => 'López', 'racing_team_id' => 14], // Ford España (CERT Rallycar)
            ['first_name' => 'Santiago', 'last_name' => 'Sánchez', 'racing_team_id' => 15], // Toyota Gazoo Racing Spain (S-CER)
            ['first_name' => 'Enrique', 'last_name' => 'Sánchez', 'racing_team_id' => 16], // M-Sport (CERA Recalvi)
            ['first_name' => 'Cristina', 'last_name' => 'Martín', 'racing_team_id' => 17], // Skoda Motorsport (CERT Rallycar)
            ['first_name' => 'Laura', 'last_name' => 'Fernández', 'racing_team_id' => 18], // Repsol Rally Team (CERTT GT2i)
        ];
        

        foreach ($coDrivers as $coDriver) {
            CoDriver::create($coDriver);
        }
    }
}
