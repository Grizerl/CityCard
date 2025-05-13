<?php

namespace App\Http\Controllers\Dashboard\User;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserDashboard extends Controller
{
    /**
     * User dashboard page.
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        $user = auth()->user();

        $cards = $user->cards()->with(['trips', 'transactions'])->paginate(2);

        return view('dashboard.guest.home', compact('user', 'cards'));
    }
}
