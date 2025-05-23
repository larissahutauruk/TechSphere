<?php

namespace App\Http\Controllers;

use App\Models\ratings;
use Illuminate\Http\Request;

class RatingsController extends Controller
{
    public function index()
    {
        $rating = Ratings::all(); // Mengambil semua kategori dari database
        return view('admin.rating.index', compact('ratings'));
    }
}
