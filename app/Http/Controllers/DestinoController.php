<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;

class DestinoController extends Controller
{
    public function index(){
        $destino = Destino::all();
        return view('destino.index', compact('destino'));
    }

    public function edit($id)
    {
        $destino = Destino::findOrFail($id);
        return view('destino.edit', compact('destino'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'clave' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $destino = Destino::findOrFail($id);
        $destino->clave = $request->input('clave');
        $destino->descripcion = $request->input('descripcion');
        $destino->save();

        return redirect()->route('destino.index')->with('success', 'Destino actualizado exitosamente');
    }
}
