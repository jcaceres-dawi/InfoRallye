<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Rally;
use App\Models\Category;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $today = Carbon::today();

        $categoryId = $request->category_id;

        $upcomingRallies = Rally::where('start_date', '>=', $today)
            ->when($categoryId, fn($query) => $query->where('category_id', $categoryId))
            ->orderBy('start_date', 'asc')
            ->get();

        $pastRallies = Rally::where('start_date', '<', $today)
            ->when($categoryId, fn($query) => $query->where('category_id', $categoryId))
            ->orderBy('start_date', 'desc')
            ->get();

        return view('calendar.index', compact('upcomingRallies', 'pastRallies', 'categories'));
    }
}
