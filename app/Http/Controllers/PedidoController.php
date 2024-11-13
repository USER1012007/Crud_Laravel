<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = Pedido::all();
        return view('pedidos.index', compact('pedidos'));
    }
    public function create()
    {
        $pedidos = new Pedido();
        return view('pedidos.create', compact('pedidos'));
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'Destino_clave' => 'required|string|max:255',
            'TipoVenta_tipo' => 'required|integer',
            'C_Distribucion_clave' => 'required|string|max:255',
        ]);
        $pedido = new Pedido();
        $pedido->Destino_clave= $request['Destino_clave'];
        $pedido->TipoVenta_tipo= $request['TipoVenta_tipo'];
        $pedido->C_Distribucion_clave= $request['C_Distribucion_clave'];
        $pedido->save();

        return redirect()->route('pedidos.index')->with('success', 'Pedido added successfully.');
    }
    public function destroy($id)
    {
        DB::statement('PRAGMA foreign_keys = OFF');
        $deleted = Pedido::where('id', $id)->delete();
        DB::statement('PRAGMA foreign_keys = ON');
        if ($deleted) {
            return redirect()->route('pedidos.index')->with('success', 'pedidos actualizado exitosamente');
        } else {
            return response()->json(['message' => 'Failed to delete record'], 500);
        }
    }
}
