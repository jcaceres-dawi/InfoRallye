<?php

namespace App\Http\Controllers\Admin;

use App\Models\Team;
use App\Models\Rally;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamRallyController extends Controller
{
    public function index()
    {
        $teamRallies = Team::with('rallies')->get();
        return view('admin.team_rally.index', compact('teamRallies'));
    }

    public function create()
    {
        $teams = Team::all();
        $rallies = Rally::all();
        return view('admin.team_rally.create', compact('teams', 'rallies'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'rally_id' => 'required|exists:rallies,id',
        ]);

        $team = Team::find($request->team_id);

        // Verificar si la relación ya existe
        if ($team->rallies()->where('rallies.id', $request->rally_id)->exists()) {
            return back()->withErrors(['rally_id' => 'Esta relación ya existe.']);
        }

        // Crear la relación
        $team->rallies()->attach($request->rally_id);

        return redirect()->route('admin.team_rally.index')->with('success', 'Relación creada correctamente.');
    }

    public function destroy($teamId, $rallyId)
    {
        $team = Team::find($teamId);
        $team->rallies()->detach($rallyId);

        return redirect()->route('admin.team_rally.index')->with('success', 'Relación eliminada.');
    }
}
