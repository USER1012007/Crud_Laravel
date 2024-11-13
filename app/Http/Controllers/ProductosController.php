<?php

namespace App\Http\Controllers;

use App\Models\Productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = productos::all();
        return view('productos.index', compact('productos'));
    }

    public function edit($id)
    {
        $productos = Productos::findOrFail($id);
        return view('productos.edit', compact('productos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'codigo' => 'required|integer',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
        ]);

        $productos = Productos::findOrFail($id);
        $productos->codigo = $request->input('codigo');
        $productos->descripcion = $request->input('descripcion');
        $productos->precio = $request->input('precio');
        $productos->save();

        return redirect()->route('productos.index')->with('success', 'productos actualizado exitosamente');
    }
}
