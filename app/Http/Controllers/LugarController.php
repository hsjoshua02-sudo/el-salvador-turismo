<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class LugarController extends Controller
{
    public function index()
    {
        $lugares = Lugar::all();
        return view('lugares.index', compact('lugares'));
    }

    public function show($id)
    {
        $lugar = Lugar::find($id);

        if (!$lugar) {
            abort(404, 'Lugar turístico no encontrado.');
        }

        return view('lugares.show', compact('lugar'));
    }

    public function contacto(Request $request)
    {
        $validated = $request->validate([
            'nombre'  => 'required|string|max:100',
            'email'   => 'required|email',
            'mensaje' => 'required|string|min:10',
        ]);

        return back()->with('exito', '¡Gracias por contactarnos! Tu consulta ha sido enviada.');
    }
}