<?php

namespace App\Http\Controllers;

use App\Models\Stage;
use App\Models\StageResult;
use Illuminate\Http\Request;
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

        // Obtener los resultados del stage
        $results = StageResult::where('stage_id', $stageId)->get();

        $results = $stage->results->sortBy(function ($result) {
            return Carbon::createFromFormat('Y-m-d H:i:s', $result->time)->timestamp;
        })->values();

        // Generar el PDF con los datos obtenidos
        $pdf = Pdf::loadView('stages.results_pdf', compact('stage', 'results'));

        // Descargar el PDF
        return $pdf->download('resultados_stage_' . $stage->id . '.pdf');
    }
}
