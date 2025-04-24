<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\RacingTeam;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();

        $categoryId = $request->category_id;

        $teams = RacingTeam::with('category')
            ->when($categoryId, function ($query) use ($categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->paginate(9);

        return view('teams.index', compact('categories', 'teams'));
    }
}
