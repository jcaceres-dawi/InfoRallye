<?php

namespace App\Http\Controllers\Admin;

use App\Models\Rally;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Stage;

class StageController extends Controller
{
    public function index()
    {
        $stages = Stage::with('rally')->get();
        return view('admin.stages.index', compact('stages'));
    }

    public function create()
    {
        $rallyes = Rally::all();
        return view('admin.stages.create', compact('rallyes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rally_id' => 'required|exists:rallies,id',
            'name' => 'required|string',
            'surface' => 'required|string',
            'length_km' => 'required|numeric',
            'full_route' => 'required|json',
        ]);

        $route = json_decode($request['full_route'], true);

        // Validación de que haya al menos dos puntos en la ruta (inicio y fin)
        if (count($route) < 2) {
            return back()->withErrors(['full_route' => 'Debes marcar al menos dos puntos (inicio y fin).']);
        }

        // Crear el nuevo tramo
        Stage::create([
            'rally_id' => $request['rally_id'],
            'name' => $request['name'],
            'surface' => $request['surface'],
            'length_km' => $request['length_km'],
            'route' => $request['full_route'], // Guardamos la ruta completa directamente
        ]);

        return redirect()->route('admin.stages.index')->with('success', 'Tramo creado correctamente.');
    }

    public function edit(Stage $stage)
    {
        $rallyes = Rally::all();

        // Convertimos los puntos de la ruta en un formato adecuado para el mapa
        $route = json_decode($stage->route, true) ?? [];

        $stage->full_route = $route;

        return view('admin.stages.edit', compact('stage', 'rallyes'));
    }

    public function update(Request $request, Stage $stage)
    {
        $request->validate([
            'rally_id' => 'required|exists:rallies,id',
            'name' => 'required|string|max:255',
            'surface' => 'required|string',
            'length_km' => 'required|numeric',
            'full_route' => 'required|json',
        ]);

        $route = json_decode($request['full_route'], true);

        // Validación de que haya al menos dos puntos en la ruta (inicio y fin)
        if (count($route) < 2) {
            return back()->withErrors(['full_route' => 'Debes marcar al menos dos puntos (inicio y fin).'])->withInput();
        }

        // Actualizamos el tramo con los nuevos datos
        $stage->update([
            'rally_id' => $request['rally_id'],
            'name' => $request['name'],
            'surface' => $request['surface'],
            'length_km' => $request['length_km'],
            'route' => $request['full_route'], // Actualizamos la ruta completa
        ]);

        return redirect()->route('admin.stages.index')->with('success', 'Tramo actualizado.');
    }

    public function destroy(Stage $stage)
    {
        $stage->delete();
        return redirect()->route('admin.stages.index')->with('success', 'Tramo eliminado.');
    }
}
