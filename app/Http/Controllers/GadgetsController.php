<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gadgets;
use App\Models\categories;

class GadgetsController extends Controller
{
    public function edit($id)
    {
        $gadgets = Gadgets::findOrFail($id);
        $categories = Categories::all();
        return view('AdminEdit', compact('gadgets', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric',
        ]);

        $gadget = Gadgets::findOrFail($id);
        $gadget->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.gadgets')->with('success', 'Gadget berhasil diperbarui');
    }

    public function destroy($id)
    {
        $gadget = Gadgets::findOrFail($id);
        $gadget->delete();

        return redirect()->route('admin.gadgets')->with('success', 'Gadget berhasil dihapus');
    }

}
