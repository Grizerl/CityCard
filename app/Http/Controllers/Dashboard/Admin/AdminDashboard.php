<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Http\Controllers\Controller;
use App\Models\Citi;
use App\Models\Tiket_Type;
use App\Models\Transport;

class AdminDashboard extends Controller
{
    public function home()
    {
        return view('dashboard.admin.home', [
            'cities' => Citi::count(),
            'transport' => Transport::count(),
            'ticket' => Tiket_Type::count(),
        ]);
    }
}
