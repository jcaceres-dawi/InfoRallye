<?php

namespace App\Http\Controllers\Admin;

use App\Models\RacingTeam;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;

class RacingTeamController extends Controller
{
    public function index()
    {
        $racingTeams = RacingTeam::with('category')->orderBy('name')->get();
        return view('admin.racing_teams.index', compact('racingTeams'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.racing_teams.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $racingTeam = RacingTeam::create($request->only('name', 'category_id'));

        Team::create([
            'racing_team_id' => $racingTeam->id,
            'driver_id' => null,
            'co_driver_id' => null,
        ]);

        return redirect()->route('admin.racing_teams.index')->with('success', 'Equipo de carreras creado correctamente.');
    }

    public function edit(RacingTeam $racingTeam)
    {
        $categories = Category::all();
        return view('admin.racing_teams.edit', compact('racingTeam', 'categories'));
    }

    public function update(Request $request, RacingTeam $racingTeam)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
        ]);

        $racingTeam->update($request->only('name', 'category_id'));

        return redirect()->route('admin.racing_teams.index')->with('success', 'Equipo de carreras actualizado.');
    }

    public function destroy(RacingTeam $racingTeam)
    {
        $racingTeam->delete();
        return redirect()->route('admin.racing_teams.index')->with('success', 'Equipo de carreras eliminado.');
    }
}
