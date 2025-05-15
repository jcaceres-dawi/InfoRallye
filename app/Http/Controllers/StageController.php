<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\StageResult;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

class StageController extends Controller
{
    public function show(Stage $stage)
    {
        return view('stages.show', compact('stage'));
    }

    public function generatePdf($stageId)
    {
        $stage = Stage::findOrFail($stageId);

        $results = StageResult::where('stage_id', $stageId)->get();

        $results = $stage->results->sortBy(function ($result) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $result->time)->timestamp;
        })->values();

        $pdf = Pdf::loadView('stages.results_pdf', compact('stage', 'results'));

        return $pdf->download('resultados_stage_' . $stage->id . '.pdf');
    }
}
