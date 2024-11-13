<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\incluye;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;
class incluyeController extends Controller
{
    public function index(){
        $incluye = Incluye::orderBy('Pedidos_id', 'ASC')->get();
        return view('incluye.index', compact('incluye'));
    }
    public function edit($id)
    {
        $incluye = incluye::findOrFail($id);
        return view('incluye.edit', compact('incluye'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'Pedidos_id' => 'required|Integer',
            'Productos_codigo' => 'required|Integer',
            'cantidad' => 'required|numeric',
        ]);

        $incluye = incluye::findOrFail($id);
        $incluye->Pedidos_id = $request->input('Pedidos_id');
        $incluye->Productos_codigo = $request->input('Productos_codigo');
        $incluye->cantidad = $request->input('cantidad');
        $incluye->save();

        return redirect()->route('incluye.index')->with('success', 'incluye actualizado exitosamente');
    }

    public function create()
    {
        $incluye = new Incluye();
    $pedidos = Pedido::pluck('id')->toArray();
        $incluyes = incluye::all();
        $ide = incluye::pluck('Pedidos_id')->toArray();
        $productos_codigos = incluye::pluck('Productos_codigo')->toArray();
        return view('incluye.create', compact('incluye', 'ide', 'productos_codigos', 'pedidos'));
    }

public function store(Request $request)
{
    $validatedData = $request->validate([
        'id' => 'required|integer',
        'Productos_codigo' => 'required|integer',
        'cantidad' => 'required|numeric',
    ]);

    $incluye = new Incluye();
    $incluye->Pedidos_id = $validatedData['id'];
    $incluye->Productos_codigo = $validatedData['Productos_codigo'];
    $incluye->cantidad = $validatedData['cantidad'];

    $incluye->save();
    return redirect()->route('incluye.index')->with('success', 'Pedido added successfully.');
}
    public function destroy($id)
    {
        DB::statement('PRAGMA foreign_keys = OFF');
        $deleted = Incluye::where('id', $id)->delete();
        DB::statement('PRAGMA foreign_keys = ON');
        if ($deleted) {
            return redirect()->route('incluye.index')->with('success', 'incluye actualizado exitosamente');
        } else {
            return response()->json(['message' => 'Failed to delete record'], 500);
        }
    }
}
