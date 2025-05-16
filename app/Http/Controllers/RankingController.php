<?php

namespace App\Http\Controllers;


use App\Models\Rally;
use Barryvdh\DomPDF\Facade\Pdf;

class RankingController extends Controller
{
    public function index()
    {
        $currentYear = now()->year;
        $selectedYear = request('year', $currentYear);

        $availableYears = Rally::where('end_date', '<', now())
            ->selectRaw('YEAR(end_date) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        $rallies = Rally::whereYear('end_date', $selectedYear)
            ->where('end_date', '<', now())
            ->orderBy('start_date', 'desc')
            ->get();

        return view('rankings.index', compact('rallies', 'availableYears', 'selectedYear'));
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

        foreach ($rally->teams as $team) {
            $results = $rally->stages->map(function ($stage) use ($team) {
                return $stage->results->firstWhere('team_id', $team->id);
            });

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
