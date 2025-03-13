<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategoriesController extends Controller
{
    public function categories()
    {
        $categories = Categories::all(); // Mengambil semua kategori dari database
        return view('admin.categories.index', compact('categories'));
    }
}
