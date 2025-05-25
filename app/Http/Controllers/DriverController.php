<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CoDriver;
use App\Models\Driver;
use App\Models\RacingTeam;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index(Request $request)
    {
        $categoryId = $request->input('category_id');
        $role = $request->input('role');

        $teams = RacingTeam::when($categoryId, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->pluck('id');

        if ($role == 'driver') {
            $competitors = Driver::whereIn('racing_team_id', $teams)
                ->select('*')
                ->selectRaw("'Piloto' as role")
                ->paginate(8);
        } elseif ($role == 'co_driver') {
            $competitors = CoDriver::whereIn('racing_team_id', $teams)
                ->select('*')
                ->selectRaw("'Copiloto' as role")
                ->paginate(8);
        } else {
            $drivers = Driver::whereIn('racing_team_id', $teams)
                ->select('*')
                ->selectRaw("'Piloto' as role");

            $coDrivers = CoDriver::whereIn('racing_team_id', $teams)
                ->select('*')
                ->selectRaw("'Copiloto' as role");

            $all = $drivers->unionAll($coDrivers)->get();

            $page = $request->get('page', 1);
            $perPage = 8;
            $offset = ($page - 1) * $perPage;
            $competitors = new \Illuminate\Pagination\LengthAwarePaginator(
                $all->slice($offset, $perPage)->values(),
                $all->count(),
                $perPage,
                $page,
                ['path' => $request->url(), 'query' => $request->query()]
            );
        }

        $categories = Category::all();

        return view('competitors.index', compact('competitors', 'categories'));
    }
}
