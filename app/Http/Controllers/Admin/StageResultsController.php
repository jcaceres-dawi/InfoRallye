<?php

namespace App\Http\Controllers\Admin;

use App\Models\Stage;
use App\Models\Team;
use App\Models\StageResult;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class StageResultsController extends Controller
{
    public function index()
    {
        $stageResults = StageResult::with(['stage', 'team'])->paginate(20);
        return view('admin.stage_results.index', compact('stageResults'));
    }

    public function create(Request $request)
    {
        $today = Carbon::today();

        $stages = Stage::whereHas('rally', function ($query) use ($today) {
            $query->whereDate('end_date', '<', $today);
        })->with('rally')->get();

        $selectedStageId = $request->input('stage_id');
        $teams = collect();

        if ($selectedStageId) {
            $stage = Stage::with('rally.teams')->find($selectedStageId);
            $teams = $stage?->rally?->teams ?? collect();
        }

        return view('admin.stage_results.create', compact('stages', 'teams'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'stage_id' => 'required|exists:stages,id',
            'team_id' => 'required|exists:teams,id',
            'hours' => 'required|numeric|between:0,23',
            'minutes' => 'required|numeric|between:0,59',
            'seconds' => 'required|numeric|between:0,59',
        ]);

        $exists = StageResult::where('stage_id', $request->stage_id)
            ->where('team_id', $request->team_id)
            ->exists();

        if ($exists) {
            return back()->withErrors(['team_id' => 'Este equipo ya tiene un resultado registrado para esta etapa.'])->withInput();
        }

        $time = sprintf('%02d:%02d:%02d', $request->hours, $request->minutes, $request->seconds);

        StageResult::create([
            'stage_id' => $request['stage_id'],
            'team_id' => $request['team_id'],
            'time' => $time,
        ]);

        return redirect()->route('admin.stage_results.index')->with('success', 'Resultado de etapa creado correctamente.');
    }

    public function edit(StageResult $stageResult)
    {
        // Cargar las etapas con sus rallies
        $stages = Stage::with('rally')->get();

        // Cargar los equipos relacionados con la etapa actual
        $teams = $stageResult->stage->rally->teams;

        return view('admin.stage_results.edit', compact('stageResult', 'stages', 'teams'));
    }

    public function update(Request $request, StageResult $stageResult)
    {
        $request->validate([
            'hours' => 'required|numeric|between:0,23',
            'minutes' => 'required|numeric|between:0,59',
            'seconds' => 'required|numeric|between:0,59',
        ]);

        $time = sprintf('%02d:%02d:%02d', $request->hours, $request->minutes, $request->seconds);

        $stageResult->update([
            'time' => $time,
        ]);

        return redirect()->route('admin.stage_results.index')->with('success', 'Tiempo actualizado correctamente.');
    }


    public function destroy(StageResult $stageResult)
    {
        $stageResult->delete();
        return redirect()->route('admin.stage_results.index')->with('success', 'Resultado de etapa eliminado.');
    }
}
