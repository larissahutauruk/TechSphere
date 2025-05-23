<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class PraloginController extends Controller
{
    public function pralogin()
    {
        $categories = Categories::all();

        return view('pralogin', compact('categories'));
    }
}
