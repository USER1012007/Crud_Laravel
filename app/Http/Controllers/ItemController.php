<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function edit($id)
    {
        $item = Item::findOrFail($id);
            return view('items.edit', compact('item'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'clave' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        $item = Item::findOrFail($id);
        $item->clave = $request->input('clave');
        $item->descripcion = $request->input('descripcion');
        $item->save();

        return redirect()->route('items.index')->with('success', 'Item actualizado exitosamente');
    }
}
