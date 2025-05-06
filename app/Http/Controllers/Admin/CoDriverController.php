<?php

namespace App\Http\Controllers\Admin;

use App\Models\CoDriver;
use App\Models\RacingTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CoDriverController extends Controller
{
    public function index()
    {
        $codrivers = CoDriver::with('racingTeam')->orderBy('last_name')->get();
        return view('admin.codrivers.index', compact('codrivers'));
    }

    public function create()
    {
        $racingTeams = RacingTeam::all();
        return view('admin.codrivers.create', compact('racingTeams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'racing_team_id' => 'nullable|exists:racing_teams,id',
        ]);

        CoDriver::create($request->only('first_name', 'last_name', 'racing_team_id'));

        return redirect()->route('admin.codrivers.index')->with('success', 'Piloto creado correctamente.');
    }

    public function edit(CoDriver $codriver)
    {
        $racingTeams = RacingTeam::all();
        return view('admin.codrivers.edit', compact('codriver', 'racingTeams'));
    }

    public function update(Request $request, CoDriver $codriver)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'racing_team_id' => 'nullable|exists:racing_teams,id',
        ]);

        $codriver->update($request->only('first_name', 'last_name', 'racing_team_id'));

        return redirect()->route('admin.codrivers.index')->with('success', 'Piloto actualizado.');
    }

    public function destroy(CoDriver $codriver)
    {
        $codriver->delete();
        return redirect()->route('admin.codrivers.index')->with('success', 'Piloto eliminado.');
    }
}
