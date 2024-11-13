<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoVenta;

class TipoVentaController extends Controller
{
    public function index(){
        $tipoventa = TipoVenta::all();
        return view('tipoventa.index', compact('tipoventa'));
    }
    public function edit($id)
    {
        $tipoventa = TipoVenta::findOrFail($id);
        return view('tipoventa.edit', compact('tipoventa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tipo' => 'required|integer',
            'descripcion' => 'required|string',
        ]);

        $tipoventa = TipoVenta::findOrFail($id);
        $tipoventa->tipo = $request->input('tipo');
        $tipoventa->descripcion = $request->input('descripcion');
        $tipoventa->save();

        return redirect()->route('tipoventa.index')->with('success', 'tipo venta actualizado exitosamente');
    }
}
