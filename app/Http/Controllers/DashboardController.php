<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['unauthorized' => 'Silakan login terlebih dahulu']);
        }

        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return view('UserDashboard');
        }
    }
}
