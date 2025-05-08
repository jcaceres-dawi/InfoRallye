<?php

namespace App\Http\Controllers\Admin;

use App\Models\Driver;
use App\Models\RacingTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::with('racingTeam')->orderBy('last_name')->get();
        return view('admin.drivers.index', compact('drivers'));
    }

    public function create()
    {
        $racingTeams = RacingTeam::all();
        return view('admin.drivers.create', compact('racingTeams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'racing_team_id' => 'nullable|exists:racing_teams,id',
        ]);

        $driver = Driver::create($request->only('first_name', 'last_name', 'racing_team_id'));

        Team::updateOrCreate(
            ['racing_team_id' => $request->racing_team_id],
            ['driver_id' => $driver->id]
        );

        return redirect()->route('admin.drivers.index')->with('success', 'Piloto creado correctamente.');
    }

    public function edit(Driver $driver)
    {
        $racingTeams = RacingTeam::all();
        return view('admin.drivers.edit', compact('driver', 'racingTeams'));
    }

    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'racing_team_id' => 'nullable|exists:racing_teams,id',
        ]);

        $driver->update($request->only('first_name', 'last_name', 'racing_team_id'));

        return redirect()->route('admin.drivers.index')->with('success', 'Piloto actualizado.');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('admin.drivers.index')->with('success', 'Piloto eliminado.');
    }
}
