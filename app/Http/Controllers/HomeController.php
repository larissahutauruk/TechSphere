<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = [
            ['name' => 'iPhone 16', 'image' => 'iphone.jpg', 'price' => 'Rp 15.000.000'],
            ['name' => 'ASUS ROG Zephyrus G14', 'image' => 'rog.jpg', 'price' => 'Rp 25.000.000'],
            ['name' => 'Samsung Galaxy S25 Ultra', 'image' => 'samsung.jpg', 'price' => 'Rp 20.000.000'],
        ];
        return view('home', compact('products'));
    }
}
