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
            $competitors = Driver::whereIn('racing_team_id', $teams)->paginate(8);
        } elseif ($role == 'co_driver') {
            $competitors = CoDriver::whereIn('racing_team_id', $teams)->paginate(8);
        } else {
            $drivers = Driver::whereIn('racing_team_id', $teams);
            $coDrivers = CoDriver::whereIn('racing_team_id', $teams);
            $competitors = $drivers->union($coDrivers)->paginate(9);
        }

        $categories = Category::all();
        

        return view('competitors.index', compact('competitors', 'categories'));
    }
}
