<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Ticket_Type;
use App\Models\Transport;
use Illuminate\View\View;

class AdminDashboard extends Controller
{
    /**
     * Admin dashboard page.
     * @return \Illuminate\View\View
     */
    public function home(): View
    {
        return view('dashboard.admin.home', [
            'cities' => City::count(),
            'transport' => Transport::count(),
            'ticket' => Ticket_Type::count(),
        ]);
    }
}
