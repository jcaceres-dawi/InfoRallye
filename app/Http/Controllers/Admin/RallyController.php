<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rally;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class RallyController extends Controller
{
    public function index()
    {
        $rallies = Rally::with('category')->orderBy('start_date')->get();
        return view('admin.rallies.index', compact('rallies'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.rallies.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
        ]);

        Rally::create($request->only('name', 'location', 'website', 'start_date', 'end_date', 'category_id'));

        return redirect()->route('admin.rallies.index')->with('success', 'Rally creado correctamente.');
    }

    public function edit(Rally $rally)
    {
        $categories = Category::all();
        return view('admin.rallies.edit', compact('rally', 'categories'));
    }

    public function update(Request $request, Rally $rally)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'category_id' => 'required|exists:categories,id',
        ]);

        $rally->update($request->only('name', 'location', 'website', 'start_date', 'end_date', 'category_id'));

        return redirect()->route('admin.rallies.index')->with('success', 'Rally actualizado.');
    }

    public function destroy(Rally $rally)
    {
        $rally->delete();
        return redirect()->route('admin.rallies.index')->with('success', 'Rally eliminado.');
    }
}
