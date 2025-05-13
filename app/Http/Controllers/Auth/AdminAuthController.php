<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    /**
     * Show login form.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('auth.admin.login');
    }

    /**
     * Login request for admin.
     *
     * @param  \App\Http\Requests\Auth\AdminRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminRequest $request): RedirectResponse
    {
        $data = $request->only('name', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();
    }

    /**
    * Logout admin.
    *
    * @return \Illuminate\Http\RedirectResponse
    */
    public function logout(): RedirectResponse
    {
        Auth::logout();
        return redirect()->route('admin.login.form');
    }
}
