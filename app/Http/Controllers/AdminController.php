<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Gadgets;

class AdminController extends Controller
{
    public function index()
    {
        $gadgets = Gadgets::all(); // Ambil semua gadget dari database
        $categories = Categories::all(); // Ambil semua kategori dari database

        return view('AdminDashboard', compact('gadgets', 'categories'));
    }


    // Menampilkan halaman categories
    public function categories()
    {
        $categories = Categories::all(); // Mengambil semua kategori dari database
        return view('admin.categories', compact('categories'));
    }

    // Menampilkan halaman gadgets
    public function gadgets()
    {
        $gadgets = Gadgets::all(); // Mengambil semua gadget dari database
        return view('admin.gadgets', compact('gadgets'));
    }
}
