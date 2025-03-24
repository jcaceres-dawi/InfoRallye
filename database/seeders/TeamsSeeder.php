<?php

namespace Database\Seeders;

use App\Models\CoDriver;
use App\Models\Driver;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $drivers = Driver::all();
        $co_drivers = CoDriver::all();


        foreach ($drivers as $driver) {
            $co_driver = $co_drivers->where('racing_team_id', $driver->racing_team_id)->first();

            if ($co_driver) {
                Team::create([
                    'driver_id' => $driver->id,
                    'co_driver_id' => $co_driver->id,
                    'racing_team_id' => $driver->racing_team_id,
                ]);
            }
        }
    }
}
