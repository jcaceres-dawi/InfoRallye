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
        $completed = [];
        $incomplete = [];

        $stageCount = $rally->stages->count();

        foreach ($rally->teams as $team) {
            $results = $rally->stages->map(function ($stage) use ($team) {
                return $stage->results->firstWhere('team_id', $team->id);
            });

            // Verifica si el equipo tiene tiempo para cada tramo
            if ($results->contains(null)) {
                $incomplete[] = $team;
            } else {
                $totalSeconds = $results->sum(function ($result) {
                    return strtotime($result->time) - strtotime('00:00:00');
                });

                $completed[] = [
                    'team' => $team,
                    'total_seconds' => $totalSeconds,
                    'formatted_time' => gmdate('H:i:s', $totalSeconds),
                ];
            }
        }

        return [
            'completed' => collect($completed)->sortBy('total_seconds')->values(),
            'incomplete' => collect($incomplete),
        ];
    }
}
