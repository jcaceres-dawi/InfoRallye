<?php

namespace App\Http\Controllers;

use App\Models\Rally;
use Illuminate\Http\Request;

class RallyController extends Controller
{
    public function index($rally_id, Request $request)
    {
        $rally = Rally::where('id', $rally_id)->first();

        return view('rallys.index', compact('rally'));
    }
}
