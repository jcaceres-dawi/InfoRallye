<?php

namespace App\Http\Controllers;


use App\Models\Rally;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class RankingController extends Controller
{
    public function index()
    {
        $rallies = Rally::where('end_date', '<', now())->get();

        return view('rankings.index', compact('rallies'));
    }

    public function show(Rally $rally)
    {
        $rankings = $this->calculateRanking($rally);
        return view('rankings.show', compact('rally', 'rankings'));
    }

    public function downloadPdf(Rally $rally)
    {
        $rankings = $this->calculateRanking($rally);
        return Pdf::loadView('rankings.ranking_pdf', compact('rally', 'rankings'))->download("Clasificación_{$rally->name}.pdf");
    }

    private function calculateRanking(Rally $rally)
    {
        return $rally->teams->map(function ($team) use ($rally) {
            $totalSeconds = $rally->stages->sum(function ($stage) use ($team) {
                $result = $stage->results->firstWhere('team_id', $team->id);
                return $result ? strtotime($result->time) - strtotime('00:00:00') : 0;

            });

            return [
                'team' => $team,
                'total_seconds' => $totalSeconds,
                'formatted_time' => gmdate('H:i:s', $totalSeconds),
            ];
        })->sortBy('total_seconds')->values();
    }
}
