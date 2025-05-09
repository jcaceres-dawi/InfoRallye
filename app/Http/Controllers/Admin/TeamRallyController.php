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

    public function create(Request $request)
    {
        $rallies = Rally::with('category')->get();
        $teams = collect();

        $selectedRallyId = $request->input('rally_id');

        if ($selectedRallyId) {
            $rally = Rally::with('category')->find($selectedRallyId);

            if ($rally) {
                $teams = Team::whereHas('racingTeam', function ($query) use ($rally) {
                    $query->where('category_id', $rally->category_id);
                })
                    ->with('racingTeam')
                    ->get();
            }
        }

        return view('admin.team_rally.create', compact('rallies', 'teams'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'team_id' => 'required|exists:teams,id',
            'rally_id' => 'required|exists:rallies,id',
        ]);

        $team = Team::find($request->team_id);

        if ($team->rallies()->where('rallies.id', $request->rally_id)->exists()) {
            return back()->withErrors(['rally_id' => 'Esta relación ya existe.']);
        }

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
