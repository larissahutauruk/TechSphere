<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\gadgets;

class CategoriesController extends Controller
{
    // Menampilkan daftar kategori di halaman admin
    public function index()
    {
        $categories = Categories::all(); // Mengambil semua kategori dari database
        return view('admin.categories.index', data: compact('categories'));
    }
    public function admin()
    {
        $categories = Categories::all();
        return view('about', compact('categories'));
    }
    public function user()
    {
        $categories = Categories::all();
        return view('user.about', compact('categories'));
    }

    // Menampilkan Halaman Gadgets by Categories
    public function showGadgetsByCategory($id)
    {
        $category = Categories::findOrFail($id);
        $gadgets = Gadgets::where('categories_id', $id)->get();

        return view('user.category', compact('category', 'gadgets'));
    }

    // Menampilkan form untuk membuat kategori baru
    public function create()
    {
        return view('admin.categories.create');
    }

    // Menyimpan kategori baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Categories::create([
            'name' => $request->name,
        ]);

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit kategori
    public function edit($id)
    {
        $category = Categories::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Categories::find($id);

        if (!$category) {
            return redirect()->route('admin.categories.index')->with('error', 'Gadget tidak ditemukan');
        }

        $category->update($request->all());

        return redirect()->route('admin.categories.index')->with('success', 'Data berhasil diperbarui!');
    }

    // Menghapus kategori
    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Kategori berhasil dihapus.');
    }
}