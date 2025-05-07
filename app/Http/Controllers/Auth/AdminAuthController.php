<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\Auth\AdminRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function create()
    {
        return view('auth.admin.login');
    }

    public function store(AdminRequest $request)
    {
        $data = $request->only('name', 'password');
        
        if(Auth::attempt($data))
        {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login.form');
    }
}
