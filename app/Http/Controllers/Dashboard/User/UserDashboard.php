<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserDashboard extends Controller
{
    public function home()
    {
        $user = auth()->user();
        $cards = $user->cards()->with(['trips', 'transactions'])->get();
    
        return view('dashboard.guest.home', compact('user', 'cards'));
    }
    
}
